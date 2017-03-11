<?php
    // get the data from the form
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password= filter_input(INPUT_POST, 'password', FILTER_VALIDATE_REGEXP);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_VALIDATE_INT);
    // get the rest of the data for the form
    // for the heard_from radio buttons,
    $heard_from =filter_input(INPUT_POST, 'heard_from',FILTER_SANITIZE_SPECIAL_CHARS);
    // display a value of 'Unknown' if the user doesn't select a radio button
        if($heard_from==null){

            $heard_from ="unknown";
        }else{
            foreach ($heard_from as  $heard  )
            echo  $heard;
        }
    // for the wants_updates check box,
$wants_updates=filter_input(INPUT_POST, 'wants_updates', FILTER_VALIDATE_URL);
    // display a value of 'Yes' or 'No'
        if(isset($wants_updates)){

            $wants_updates ="YES";

        }else{
            $wants_updates ="No";

        }
$contact_via=filter_input(INPUT_POST, 'contact_via',FILTER_SANITIZE_SPECIAL_CHARS);

        if(($contact_via !=null)){
            foreach ($contact_via as $contact){
                echo $contact;
            }

        }
$comments=filter_input(INPUT_POST, 'comments');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Account Information</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>
    <main>
        <h1>Account Information</h1>

        <label>Email Address:</label>
        <span><?php echo htmlspecialchars($email); ?></span><br>

        <label>Password:</label>
        <span><?php echo htmlspecialchars($password); ?></span><br>


        <label>Phone Number:</label>
        <span><?php echo htmlspecialchars($phone); ?></span><br>


        <label>Heard From:</label>
        <span><?php echo htmlspecialchars($heard_from); ?></span><br>


        <label>Send Updates:</label>
        <span><?php echo htmlspecialchars($wants_updates); ?></span><br>

        <label>Contact Via:</label>
        <span><?php echo htmlspecialchars($contact_via); ?></span><br>
        <span>Comments:</span><br>
        <span><?php echo nl2br(htmlspecialchars ($comments)); ?></span><br>
    </main>
</body>
</html>