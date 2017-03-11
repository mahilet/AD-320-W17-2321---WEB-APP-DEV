<?php
/**
 * Created by PhpStorm.
 * User: Mahilet Hailemariam
 * Date: 2/14/2017
 * Time: 7:23 PM
 */


$servername = "localhost";
$username = "icoolsho_mhailem";
$password = "$!980-47-3659";
$dbname = "icoolsho_mhailemariam";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>



