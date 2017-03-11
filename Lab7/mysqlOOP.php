<?php
/**
 * Created by PhpStorm.
 * User: Mahilet Hailemariam
 * Date: 2/14/2017
 * Time: 7:31 PM
 */

$servername = "localhost";
$username = "icoolsho_mhailem";
$password = "$!980-47-3659";
$dbname = "icoolsho_mhailemariam";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
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
?>