<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once 'config/db.php';
$title = "Test";
$imgLocation = "images/gallery/123456789012345.png";
$status = 1;

$stmt = $conn->prepare(
    "INSERT INTO tbl_photos (title, img_location, status) VALUES (?, ?, ?)"
);
if (!$stmt) {
    echo "Prepare failed: " . $conn->error . "\n";
} else {
    $stmt->bind_param("ssi", $title, $imgLocation, $status);
    if (!$stmt->execute()) {
        echo "Execute failed: " . $stmt->error . "\n";
    } else {
        echo "Success\n";
        $conn->query("DELETE FROM tbl_photos WHERE title='Test'");
    }
}
