<?php



ini_set('display_errors','1');



/**

 * Created by PhpStorm.

 * User: Mahilet Hailemariam

 * Date: 1/26/2017

 * Time: 10:05 PM

 */



$sqFeet =0;

$paintPrice =0;

$gallons =0;

$laborCost =0;

$totalCost=0;

$laborHours=0;

$laborCostRound=0;

$paintCost=0;





$sqFeet = filter_input(INPUT_POST, 'sqFeet');

$paintPrice =  filter_input(INPUT_POST, 'paintPrice');
$message = 'Enter some numbers and click on the Submit button.';
if(!empty($sqFeet)&&(!empty($paintPrice))){



    $ratio = number_format($sqFeet/115 ,2);

    $gallons = number_format(ceil($ratio),2);

    $laborHours = number_format($ratio *8, 2);

    $laborCost = number_format($laborHours *20, 2);

    $paintCost= number_format(($gallons * $paintPrice), 2);

    $laborCostRound = sprintf("%.2f", $laborCost);

    $totalCost = number_format(($laborCost + $paintCost),2);



    $message =<<<MESSAGE

The number of gallons of paint required  = $gallons

The hours of labor required = $laborHours

The cost of the paint = $paintCost 

The labor charges = $laborCost

The total cost of the paint job  = $totalCost



MESSAGE;





}









include 'index1.php';

?>



