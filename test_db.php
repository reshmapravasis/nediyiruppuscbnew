<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include 'config/db.php';
$q1 = mysqli_query($conn, "SELECT * FROM tbl_news WHERE status = 1");
if (!$q1) echo "News query failed: " . mysqli_error($conn) . "\n";
else echo "News query success. Rows: " . mysqli_num_rows($q1) . "\n";

$q2 = mysqli_query($conn, "SELECT * FROM tbl_photos WHERE status = 1");
if (!$q2) echo "Photos query failed: " . mysqli_error($conn) . "\n";
else echo "Photos query success. Rows: " . mysqli_num_rows($q2) . "\n";
