<!DOCTYPE html>
<html>
<head>
    <title>String Tester</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <main>
        <h1>String Tester</h1>
        <form action="index.php" method="post">
        <input type="hidden" name="action" value="process_data">

        <label>Name:</label>
        <input type="name" name="name"
               value="<?php echo htmlspecialchars($name); ?>">
        <br>

        <label>E-Mail:</label>
        <input type="email" name="email"
               value="<?php echo htmlspecialchars($email); ?>">
        <br>

        <label>Phone Number:</label>
        <input type="phone" name="phone"
               value="<?php echo htmlspecialchars($phone); ?>">
        <br>

        <label>&nbsp;</label>
        <input type="submit" value="Submit">
        <br>

        </form>

        <h2>Message:</h2>
        <p><?php echo nl2br(htmlspecialchars($message)); ?></p>

    </main>
</body>
</html>