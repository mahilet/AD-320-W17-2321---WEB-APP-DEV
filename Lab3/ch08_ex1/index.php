<?php

$customer_type = strtoupper(filter_input(INPUT_POST, 'type'));
$invoice_subtotal = filter_input(INPUT_POST, 'subtotal');
if(is_numeric($invoice_subtotal)) {
    switch ($customer_type) {

        case $customer_type == 'R':

//if ($customer_type == 'R') {
            if ($invoice_subtotal < 250) {
                $discount_percent = .0;
            } else if ($invoice_subtotal >= 250 && $invoice_subtotal < 500) {
                $discount_percent = .25;
            } else if ($invoice_subtotal >= 500) {
                $discount_percent = .30;
            }
            break;


//}
        case $customer_type == 'C':

//else if ($customer_type == 'C') {
            //if ($invoice_subtotal < 250) {
            $discount_percent = .2;
            //} else {
            // $discount_percent = .3;
            //}
            beak;

        case $customer_type == 'T':

//} else if($customer_type == 'T'){
            if ($invoice_total < 500) {
                $discount_percent = .4;

            } else {

                $discount_percent = .5;
            }
            beark;
//}
//}
        default ://{
            $discount_percent = .10;
    }
}
else{
        echo '<p> Would you please Inserted Valid Number!</p>';
    }


$discount_amount = $invoice_subtotal * $discount_percent;
$invoice_total = $invoice_subtotal - $discount_amount;

$percent = number_format(($discount_percent * 100));
$discount = number_format($discount_amount, 2);
$total = number_format($invoice_total, 2);

include 'invoice_total.php';

?>

