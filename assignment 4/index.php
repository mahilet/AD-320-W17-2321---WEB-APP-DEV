<?Php
?>
<!DOCTYPE  html>
<html lang="en">
<head>
    <Title></Title>
</head>

<body>
<div id="textarea ">
    <form action="assignment4.php" method="post">
<!--        <label>paste paragraph here</label><br>-->
<!--        <input type="text" name="paragraph"-->
<!--               value="--><?php //echo htmlspecialchars($paragraph); ?><!--"/>-->
<!---->
<!--        <input type="submit">Submit</input><br>-->
        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the
            1500s, when an unknown printer took a
            galley of type and scrambled it to make a type specimen book</p>

    </form>

    <p><?php echo nl2br(htmlspecialchars($message), FALSE); ?></p>


</div>
</body>





</html>






