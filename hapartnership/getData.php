<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fmc_hh";

// Buat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query untuk mendapatkan data total sales bulan ini
$currentMonth = date('Y-m');
$sqlCurrentMonth = "SELECT COUNT(*) as total_sales FROM ps WHERE DATE_FORMAT(ORDER DATE, '%Y-%m') = '$currentMonth'";
$resultCurrentMonth = $conn->query($sqlCurrentMonth);
$totalSalesCurrentMonth = $resultCurrentMonth->fetch_assoc()['total_sales'];

// Query untuk mendapatkan data total sales bulan sebelumnya
$lastMonth = date('Y-m', strtotime('-1 month'));
$sqlLastMonth = "SELECT COUNT(*) as total_sales FROM ps WHERE DATE_FORMAT(ORDER DATE, '%Y-%m') = '$lastMonth'";
$resultLastMonth = $conn->query($sqlLastMonth);
$totalSalesLastMonth = $resultLastMonth->fetch_assoc()['total_sales'];

// Hitung persentase MoM
if ($totalSalesLastMonth > 0) {
    $percentChangeMoM = (($totalSalesCurrentMonth - $totalSalesLastMonth) / $totalSalesLastMonth) * 100;
} else {
    $percentChangeMoM = 0;
}

// Query untuk mendapatkan data sales per hari dalam bulan ini
$sqlDailySales = "SELECT DATE(ORDER DATE) as order_date, COUNT(*) as daily_sales FROM ps WHERE DATE_FORMAT(ORDER DATE, '%Y-%m') = '$currentMonth' GROUP BY DATE(ORDER DATE)";
$resultDailySales = $conn->query($sqlDailySales);

$dailySalesData = [];
while ($row = $resultDailySales->fetch_assoc()) {
    $dailySalesData[] = [
        'date' => $row['order_date'],
        'sales' => $row['daily_sales']
    ];
}

$conn->close();
