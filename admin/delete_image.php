<?php
session_save_path(__DIR__ . '/../sessions');
require_once 'auth.php';
require_once '../config/db.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = (int)$_GET['id'];

    // Get image path to delete it
    $stmt = $conn->prepare("SELECT img_location FROM tbl_photos WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $res = $stmt->get_result();
    
    if ($row = $res->fetch_assoc()) {
        if (!empty($row['img_location']) && file_exists(__DIR__ . '/../' . $row['img_location'])) {
            unlink(__DIR__ . '/../' . $row['img_location']);
        }
    }
    $stmt->close();

    // Delete record
    $delStmt = $conn->prepare("DELETE FROM tbl_photos WHERE id = ?");
    $delStmt->bind_param("i", $id);
   if (!$delStmt->execute()) {
    die("Delete Image Error: " . $delStmt->error);
}
    $delStmt->close();
}

header("Location: dashboard.php?msg=success&tab=gallery");
exit;
