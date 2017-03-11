<?php
/**
 * Created by PhpStorm.
 * User: zw251y
 * Date: 3/10/2016
 * Time: 2:45 PM
 */

include "conn_proc.php";
//
//$sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')";
//
//if (mysqli_query($conn, $sql)) {
//    echo "New record created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//}
//
//mysqli_close($conn);


try {

// set the PDO error mode to exception

    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Tom', 'Henri', 'tom@outlook.com')";


// use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn->close();
?>





//?>
<!---->

