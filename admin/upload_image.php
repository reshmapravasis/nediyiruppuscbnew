<?php
session_save_path(sys_get_temp_dir());
require_once 'auth.php';
require_once '../config/db.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['image'])) {

    $title = trim($_POST['caption'] ?? '');
    $file  = $_FILES['image'];

    $allowed = ['jpg', 'jpeg', 'png', 'gif'];

    $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

    if (!in_array($ext, $allowed)) {
        die("Invalid image type.");
    }

    $fileName = time() . "_" . uniqid() . "." . $ext;

    $uploadDir = "../images/gallery/";
    $uploadPath = $uploadDir . $fileName;

    if (!move_uploaded_file($file['tmp_name'], $uploadPath)) {
        die("Image upload failed.");
    }

    $imgLocation = "images/gallery/" . $fileName;

    // IMPORTANT: Removed the status column because it doesn't exist
    $stmt = $conn->prepare("INSERT INTO tbl_photos (title, img_location) VALUES (?, ?)");

    if (!$stmt) {
        unlink($uploadPath);
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("ss", $title, $imgLocation);

    if (!$stmt->execute()) {
        unlink($uploadPath);
        die("Database Error: " . $stmt->error);
    }

    $stmt->close();

    header("Location: dashboard.php?tab=gallery&msg=success");
    exit();
}

header("Location: dashboard.php?tab=gallery");
exit();