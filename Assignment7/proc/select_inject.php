<?php
/**
 * Created by PhpStorm.
 * User: zw251y
 * Date: 3/10/2016
 * Time: 2:53 PM
 */

include "conn_proc.php";
//$input = "1 or 1=1";
//$sql = "SELECT id, firstname, lastname FROM MyGuests WHERE id = $input ";
//
//$result = mysqli_query($conn, $sql);
//
//if (mysqli_num_rows($result) > 0) {
//    // output data of each row
//    while($row = mysqli_fetch_assoc($result)) {
//        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//    }
//} else {
//    echo "0 results";
//}
//
//mysqli_close($conn);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$input = "1 or 1=1";
$sql = "SELECT id, firstname, lastname FROM MyGuests WHERE id = $input ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();