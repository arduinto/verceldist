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

$sqlSF = "SELECT COUNT(DISTINCT Kode) as sf FROM sfwpi WHERE sfwpi.Status NOT LIKE 'NOT%'";
$sqlPSMTD = "SELECT COUNT(DISTINCT `ORDER ID`) as psCount FROM ps";

$resultSF = $conn->query($sqlSF);
$resultPSMTD = $conn->query($sqlPSMTD);

if ($resultSF && $resultPSMTD) {
    if ($resultSF->num_rows == 1 && $resultPSMTD->num_rows > 0) {
        $rowSF = $resultSF->fetch_assoc();
        $rowPS = $resultPSMTD->fetch_assoc();

        $sfCount = $rowSF['sf'];
        $psCount = $rowPS['psCount'];
    } else {
        $sfCount = 0;
        $psCount = 0;
    }
} else {
    echo "Error: " . $conn->error;
    $sfCount = 0;
    $psCount = 0;
}

$conn->close();
