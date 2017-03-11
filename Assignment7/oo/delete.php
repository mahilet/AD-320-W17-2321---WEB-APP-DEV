<?php
/**
 * Created by PhpStorm.
 * User: zw251y
 * Date: 3/10/2016
 * Time: 2:56 PM
 */

include "conn.php";

// sql to delete a record
$sql = "DELETE FROM MyGuests WHERE id= 5";

if ($conn->query($sql) === TRUE) {
    echo "$conn->affected_rows  Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
