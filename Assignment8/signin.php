<!DOCTYPE HTML>
<html>
<head>
    <style>
        .error {color: #FF0000;}

/*
username = mahilet
password =mah16
*/

    </style>
</head>
<body>




<?php
// define variables and set to empty values
$error = "";
$action = filter_input(INPUT_POST, "submit");

switch ($action) {

    case "Login":
        if (!empty($_POST["username"])) {
            $form_username = filter_input(INPUT_POST, "username");
        }

        if (!empty($_POST["password"])) {
            $form_password = filter_input(INPUT_POST, "password");
        }

        $servername = "localhost";
        $username = "icoolsho_mhailem";
        $password = "$!980-47-3659";
        $dbname = "icoolsho_mhailemariam";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT username, password FROM Users
        WHERE username='".$form_username."' AND password='".$form_password."'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $one_row = $result->fetch_assoc();
            setcookie("username", $one_row["username"]);
            if (isset($_POST["remember_me"])) {
                setcookie("remember_username", $one_row["username"], time() + 31536000);
                setcookie("remember_password", $one_row["password"], time() + 31536000);
            } else {
                if (isset($_COOKIE["remember_username"])) {
                    setcookie("remember_username", "", time() - 31536000);
                    setcookie("remember_password", "", time() - 31536000);
                }
            }
            header('Location: signin.php');
            exit();
        } else {
            $error = "Invalid username or password!";
        }
        break;

    case "Logout":
        setcookie("username", "", time()-31536000);
        header('Location: signin.php');
        exit();
        break;
}


    /* If the username and password is correct and if it finds it in the database
     * then setcookie("username", $result["username"], time()+ 3600);
     *To get the username cookie value, you need to $_COOKIE["username"]
     */

?>

<h2>Login/Logout</h2>

<p><span class="error">* required field.</span></p>
<p><span class="error"><?php echo $error;?></span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <?php if(empty($_COOKIE["username"])): ?>
    Username: <input type="text" name="username" value="<?php echo $_COOKIE['remember_username'];?>">
        <br><br>
    Password: <input type="password" name="password" value="<?php echo $_COOKIE['remember_password'];?>">
        <br><br>
        <input type="checkbox" name="remember_me">Remember me
        <br><br>
    <input type="submit" name="submit" value="Login">
        <br><br>
    <?php else:
        echo "Welcome " . $_COOKIE['username']; ?>
        <input type="submit" name="submit" value="Logout">
    <?php endif; ?>
</form>

</body>
</html>