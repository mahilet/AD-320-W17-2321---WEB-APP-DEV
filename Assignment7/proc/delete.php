<?php
/**
 * Created by PhpStorm.
 * User: zw251y
 * Date: 3/10/2016
 * Time: 2:56 PM
 */

include "conn_proc.php";

// sql to delete a record
////$sql = "DELETE FROM MyGuests WHERE id= 5";
//$sql = "DELETE FROM MyGuests WHERE id= 1";
//if (mysqli_query($conn, $sql)) {
//    echo "Record deleted successfully";
//} else {
//    echo "Error deleting record: " . mysqli_error($conn);
//}
//
//mysqli_close($conn);


try {

    // sql to delete a record
    $sql = "DELETE FROM MyGuests WHERE id=2";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Record deleted successfully";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn->close();
?>
