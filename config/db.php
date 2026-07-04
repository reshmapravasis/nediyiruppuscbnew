<?php
$host = "localhost";
$user = "root";          // change if hosting
$pass = "admin@123";              // change if hosting
$db   = "nediyiru_db_nedi";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
