<?php
//set default values
$name = '';
$email = '';
$phone = '';
$message = "Enter some data and click on the Submit button.\n\n";

//process
$action = filter_input(INPUT_POST, 'action');

switch ($action) {
    case 'process_data':
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');
        $phone = filter_input(INPUT_POST, 'phone');

        /*************************************************
         * validate and process the name
         ************************************************/
        // 1. make sure the user enters a name
        if((!empty($name)&&(!empty($email)&&(!empty($phone))))){
            // 2. display the name with only the first letter capitalized
            $firstName .= ucfirst(substr($name, 0, strpos($name, " ")));
            $name = ucwords($name);
        // 1. make sure the user enters a name


        /*************************************************
         * validate and process the email address
         ************************************************/
        // 1. make sure the user enters an email
        // 2. make sure the email address has at least one @ sign and one dot character
            $email =filter_var($email, FILTER_VALIDATE_EMAIL);
        /*************************************************
         * validate and process the phone number
         ************************************************/
        // 1. make sure the user enters at least seven digits, not including formatting characters
        // 2. format the phone number like this 123-4567 or this 123-456-7890
  if(strlen($phone)==7 &&(is_numeric($phone))){

    $phone1 =substr($phone, 0, 3);
    $phone2 =substr($phone, 3, 4);



    $phoneMessage =<<<MESSAGE
               $phone1 -$phone2 
MESSAGE;




}
elseif(strlen($phone) >7 &&(is_numeric($phone))){

    $phone1 =substr($phone, 0, 3);
    $phone2 =substr($phone, 3, 3);
    $phone3 =substr($phone, 6);

    $phoneMessage =<<<MESSAGE
          $phone1 -$phone2-$phone3     
MESSAGE;


}else {
    echo " you should inter greater than 7  number length  ";

}
        /*************************************************
         * Display the validation message
         ************************************************/
        //$message = "This page is under construction.\n" .
                  // "Please write the code that process the data.";
       // for($i = 0; $i<strlen($name); $i++){




           // $phone =filter_var($phone, FILTER_V);


//
//
//        $message .=  "Hello" .' ' . $firstName. ", \n\n"
//                    . "Thank you for entering data : \n\n"
//                    . "Name: " . $name . "\n"
//                    . "Email: " . $email . "\n"
//                    . "Phone: " . $phone . "\n";
            $message =<<<MESSAGE
                  Hello $firstName, 
                  
                  Thank you for entering data :  
                  
                  Name: $name                  
                  Email:$email                   
                  Phone: $phoneMessage 
MESSAGE;

        }
        else{
            echo "The three data items are required!";
        }




        break;
}
include 'string_tester.php';
?>