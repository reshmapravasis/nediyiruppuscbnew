<?php
session_save_path(sys_get_temp_dir());
require_once 'auth.php';
require_once '../config/db.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = trim($_POST['title'] ?? '');
    $videoType = $_POST['video_type'] ?? 'url';
    $vdoLocation = '';

    // ----------------------------
    // YouTube / URL
    // ----------------------------
    if ($videoType == "url") {

        $vdoLocation = trim($_POST['video_url'] ?? '');

        if (empty($vdoLocation)) {
            die("Please enter a video URL.");
        }

    }

    // ----------------------------
    // Upload Video
    // ----------------------------
    elseif ($videoType == "upload") {

        if (!isset($_FILES['video_file']) || $_FILES['video_file']['error'] != UPLOAD_ERR_OK) {
            die("Please select a video.");
        }

        $allowed = ['mp4', 'webm', 'ogg'];

        $ext = strtolower(pathinfo($_FILES['video_file']['name'], PATHINFO_EXTENSION));

        if (!in_array($ext, $allowed)) {
            die("Only MP4, WEBM and OGG files are allowed.");
        }

        $uploadDir = "../images/video/";

        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        $fileName = time() . "_" . uniqid() . "." . $ext;

        $uploadPath = $uploadDir . $fileName;

        if (!move_uploaded_file($_FILES['video_file']['tmp_name'], $uploadPath)) {
            die("Video upload failed.");
        }

        $vdoLocation = "images/video/" . $fileName;
    }

    // ----------------------------
    // Insert into database
    // ----------------------------
    $stmt = $conn->prepare("INSERT INTO tbl_video (title, vdo_location) VALUES (?, ?)");

    if (!$stmt) {
        die("Prepare Error: " . $conn->error);
    }

    $stmt->bind_param("ss", $title, $vdoLocation);

    if (!$stmt->execute()) {

        if ($videoType == "upload" && file_exists("../" . $vdoLocation)) {
            unlink("../" . $vdoLocation);
        }

        die("Database Error: " . $stmt->error);
    }

    $stmt->close();

    header("Location: dashboard.php?tab=videos&msg=success");
    exit();
}

header("Location: dashboard.php?tab=videos");
exit();