<?php
/**
 * Created by PhpStorm.
 * User: zw251y
 * Date: 3/10/2016
 * Time: 3:02 PM
 */
include "conn.php";
$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

if ($conn->query($sql) === TRUE) {
    echo "$conn->affected_rows Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();