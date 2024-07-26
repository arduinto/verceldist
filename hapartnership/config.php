<?php
$servername = "localhost"; // Update if necessary
$username = "root"; // Update if necessary
$password = ""; // Update if necessary
$dbname = "fmc_hh";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
