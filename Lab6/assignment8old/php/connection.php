<?php

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

$conn->set_charset('utf8mb4');

?>