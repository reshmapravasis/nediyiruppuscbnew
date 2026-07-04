<?php
mysqli_report(MYSQLI_REPORT_OFF);

$host = "localhost";
$user = "root";          // change if hosting
$pass = "admin@123";              // change if hosting
$db   = "nediyiru_db_nedi";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("<h3>Database connection failed: " . htmlspecialchars(mysqli_connect_error()) . "</h3><p>Please check your cPanel MySQL Database username and password.</p>");
}
?>
