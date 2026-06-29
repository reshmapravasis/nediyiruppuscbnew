<?php
require_once 'auth.php';
require_once '../config/db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['id'])) {
    $id = intval($_POST['id']);
    $title = trim($_POST['title'] ?? '');

    $stmt = $conn->prepare("UPDATE tbl_video SET title = ? WHERE id = ?");
    $stmt->bind_param("si", $title, $id);
    $stmt->execute();
    $stmt->close();
}

header("Location: dashboard.php?msg=success&tab=videos");
exit;
