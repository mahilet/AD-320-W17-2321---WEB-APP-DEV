

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="main.css">

    <title>Calculate Paint</title>

</head>

<body>



    <div id="paintPrice">

        <form action="assignment3.php" method="post">

            <input type="hidden" name="action" value="process_data"/>

            <label>Enter Wall Square Feet</label>

            <input type="number" name="sqFeet"

                   value="<?php echo htmlspecialchars($sqFeet); ?>"/>

            <br>



            <label>Enter price one gallon of paint</label>

            <input type="number" name="paintPrice"

                   value="<?php echo htmlspecialchars($paintPrice); ?>"/>

            <br>



            <label>Calculate paint jobs here</label>

            <input type="submit" name="Submit"/><br>







        </form>

        <p><?php echo nl2br(htmlspecialchars($message), FALSE); ?></p>



    </div>

</body>

</html>





