<?php

// get the data from the form  
$product_description= $_POST["product_description"];
$list_price= $_POST["list_price"];
$discount_percent= $_POST["discount_percent"];
$tax= $_POST["tax"];

//calculate discount and Tax
$tax_amount= number_format($list_price *($tax)/100 , 2);
$discount_amount= number_format($list_price *($discount_percent)/100 , 2);
$discount_price = number_format($list_price -$discount_amount - $tax_amount, 2);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <span><?php echo $product_description; ?></span><br>

        <label>List Price:</label>
        <span><?php echo "$".$list_price; ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo $discount_percent; ?></span>%<br>

        <label>Discount Amount:</label>
        <span><?php echo "$".$discount_amount; ?></span><br>

        <label>Tax:</label>
        <span><?php echo $tax; ?></span>%<br>

        <label>Tax Amount:</label>
        <span><?php echo "$".$tax_amount; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo "$".$discount_price; ?></span><br>


    </main>
</body>
</html>