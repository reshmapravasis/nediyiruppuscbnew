<?php
mysqli_report(MYSQLI_REPORT_OFF);


// $user = "root";         
// $pass = "admin@123";             
// $db   = "nediyiru_db_nedi";
$host = "localhost";
$user = "nediyiru_user_nedi";          // change if hosting
$pass = "nediyiru_user_nedi";              // change if hosting
$db   = "nediyiru_db_nedi";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("<h3>Database connection failed: " . htmlspecialchars(mysqli_connect_error()) . "</h3><p>Please check your cPanel MySQL Database username and password.</p>");
}
?>

