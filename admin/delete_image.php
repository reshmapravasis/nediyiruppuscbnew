<?php
session_save_path(sys_get_temp_dir());
require_once 'auth.php';
require_once '../config/db.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_GET['id']) && is_numeric($_GET['id'])) {

    $id = (int)$_GET['id'];

    // Delete image file
    $stmt = $conn->prepare("SELECT img_location FROM tbl_photos WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        $file = __DIR__ . "/../" . $row['img_location'];

        if (file_exists($file)) {
            unlink($file);
        }
    }

    $stmt->close();

    // Delete database record
    $stmt = $conn->prepare("DELETE FROM tbl_photos WHERE id=?");
    $stmt->bind_param("i", $id);

    if (!$stmt->execute()) {
        die("Delete Error: " . $stmt->error);
    }

    if ($stmt->affected_rows == 0) {
        die("No record found with ID = " . $id);
    }

    $stmt->close();

    header("Location: dashboard.php?tab=gallery&msg=success");
    exit();
}

die("Invalid ID");