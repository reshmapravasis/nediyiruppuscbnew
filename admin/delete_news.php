<?php
require_once 'auth.php';
require_once '../config/db.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $newsId = (int)$_GET['id'];

    // Get image path to delete it
    $stmt = $conn->prepare("SELECT news_img FROM tbl_news WHERE news_id = ?");
    $stmt->bind_param("i", $newsId);
    $stmt->execute();
    $res = $stmt->get_result();
    
    if ($row = $res->fetch_assoc()) {
        if (!empty($row['news_img']) && file_exists(__DIR__ . '/../' . $row['news_img'])) {
            unlink(__DIR__ . '/../' . $row['news_img']);
        }
    }
    $stmt->close();

    // Delete record
    $delStmt = $conn->prepare("DELETE FROM tbl_news WHERE news_id = ?");
    $delStmt->bind_param("i", $newsId);
    $delStmt->execute();
    $delStmt->close();
}

header("Location: dashboard.php?msg=success&tab=news");
exit;
