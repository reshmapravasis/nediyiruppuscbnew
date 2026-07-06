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
    ie("Database connection failed: " . mysqli_connect_error());
}


