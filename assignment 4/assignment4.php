<?php
/**
 * Created by PhpStorm.
 * User: mahilet Hailemariam
 * Date: 1/29/2017
 *
 * Time: 6:59 PM
 */
//$paragraph="hellow!! this is me";
//$paragraph =  filter_input(INPUT_POST, 'paragraph');
//$message = 'Enter some numbers and click on the Submit button.';
//
////The number of characters in the text
//
////The number of letters in the text
//$lettersPlusSpaces = strlen($paragraph);
//$space = substr($paragraph, ' ');
////
//
//
//$myArray = explode(" ", $paragraph);
//foreach ($myArray as $array){
//    echo $array;
//    echo "</br>";
//}
//
//$oneWord = implode($myArray);
//echo $oneWord;
//echo "</br>";
//
//$letters = strlen($oneWord);
//echo $letters;
//
//
//
////The number of consonants in the  text
//
////The number of digits in the text
//
////The number of white-space characters in the text
//
////The number of "word characters" in the text
////The number of punctuation characters in the text
////The number of each word in the text
//
//
//$message =<<<MESSAGE
//This  should be my paragraph varable  $paragraph
//
//
//The number of characters in the text
//The number of letters in the text
//The number of consonants in the  text
//The number of digits in the text
//The number of white-space characters in the text
//The number of "word characters" in the text
//The number of punctuation characters in the text
//The number of each word in the text
//MESSAGE;
//
//


error_reporting(0);
$values = $_POST['value'];
if(isset($_POST['check'])) {

    if ($values==" ") {
        echo "<script>";
        echo "alert('It Cannot Be Empty!!! Please enter a sentence.');";
        echo "</script>";
        $values=" ";
        $results=" ";
    }
    if ($values != " ") {
        $total_vowels = 0; $total_consonants=0;

        $vowels = Array('a','e','i','o','u','A','E','I','O','U');
        $vowels = Array('a','e','i','o','u','A','E','I','O','U');
        $consonants = Array('b','c','d','f','g','h','j','k','l','m'
        ,'n','p','q','r','s','t','v','w','x','y','z'
        ,'B','C','D','F','G','H','J','K','L','M'
        ,'N','P','Q','R','S','T','V','W','X','Y','Z');

        for ($b=0;$b<strlen($values);$b++)
        {
            for ($a = 0;$a<10;$a++)
                if ($values[$b] == $vowels[$a])
                {
                    $total_vowels++;
                    break;
                }

            for ($a = 0;$a<42;$a++)
                if ($values[$b] == $consonants[$a])
                {
                    $total_consonants++;
                    break;
                }
        }
        $results .=  "==== REPORT ==== ";
        $results .=  "<br><br>";
        $results .= "The sentence is   :=>   " .$values."<br><br><br>";
        $results .= "Total Consonants  :=>  " .$total_consonants."<br>";
        $results .=  "Total Vowels     :=>  " .$total_vowels."<br>";

    }


}



include 'index.php';


?>