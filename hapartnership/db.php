<?php
session_start();

// Replace with your database credentials
$servername = "localhost"; // or your server IP
$username = "root"; // your database username
$password = ""; // your database password
$dbname = "fmc_hh"; // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>;