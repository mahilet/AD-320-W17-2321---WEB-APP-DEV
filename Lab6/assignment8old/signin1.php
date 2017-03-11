<?php
  session_start();
  require('php/header.php');
  require('php/connection.php');
  require('php/signin_functions.php');

$action = filter_input(INPUT_POST, 'action');

$login_error = "";

switch ($action) {
  case 'sign_in_form':
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    checkUser($username, $password, $conn);
    break;

  case 'sign_out':
    session_unset(); 
    session_destroy();
    header('Location: index.php');
    exit();
    break;

//  case 'sign_up_form':
//    $username = filter_input(INPUT_POST, 'username');
//    $password = filter_input(INPUT_POST, 'password');
//    $email = filter_input(INPUT_POST, 'email');
//    $usertype = filter_input(INPUT_POST, 'usertype');
//    addUser($email, $username, $password, $usertype, $conn);
//    break;
}

?>

  <link href="css/signin.css" rel="stylesheet">
  <link href="css/jumbotron.css" rel="stylesheet">
  
  <?php require('php/navbar.php'); ?>

    <div class="container">

      <form class="form-signin" id="signin_form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <h2 class="form-signin-heading">Sign In</h2>

        <?php if (!empty($login_error)) : ?>
        <div class="alert alert-danger">
          <strong><?php echo $login_error; ?></strong>
        </div>
      <?php endif; ?>
        <label for="inputUsername" class="sr-only">Username</label>
        <input type="text" name="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
          <label for=""><input type="checkbox" name="remember?" value="Yes">Remember me on redirect?</label><br>
       <!--   <input type="submit" name="SUBMIT" value="submit"><br>-->
        <button id = "sign_in_btn" class="btn btn-lg btn-primary btn-block btn-success" type="submit" name="action" value="sign_in_form">Sign in</button>

      </form>

    </div>
    <script type="text/javascript" src="js/signin.js" /></script>
  </body>
</html>
