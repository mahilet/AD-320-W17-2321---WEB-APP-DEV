<?php


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
          <link rel="stylesheet" type="text/css" href="main.css">
        <title>Assignment- 4 </title>
    </head>

    <body>
      <h2>Calculate Certain Statistics</h2>
      <div id = "paragraph">

        <form action="assign-4.php" method="post">

        <label for="">Would you please write Paragraph</label>
        <br>
        <input type="text" name="paragraph" placeholder=" Please enter a sentence" value="<?php echo htmlspecialchars($paragraph); ?>">
        <br>
        <br>
        <input id ="sub" type="submit" value="Calculate paragraph statistics">
    </form>
      </div>
