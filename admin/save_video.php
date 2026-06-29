<?php
require_once 'auth.php';
require_once '../config/db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = trim($_POST['title'] ?? '');
    $videoType = $_POST['video_type'] ?? 'url';
    $vdoLocation = '';

    if ($videoType === 'url') {
        $vdoLocation = trim($_POST['video_url'] ?? '');
        if (empty($vdoLocation)) {
            header("Location: dashboard.php?error=invalid&tab=videos");
            exit();
        }
    } else if ($videoType === 'upload') {
        if (isset($_FILES['video_file']) && $_FILES['video_file']['error'] !== UPLOAD_ERR_NO_FILE) {
            $file = $_FILES['video_file'];
            $allowTypes = ['mp4', 'webm', 'ogg'];
            $fileType = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

            if (!in_array($fileType, $allowTypes)) {
                header("Location: dashboard.php?error=type&tab=videos");
                exit();
            }

            // Short unique filename
            $fileName = substr(md5(time() . basename($file['name'])), 0, 15) . '.' . $fileType;
            // Need to make sure this dir exists
            $targetDir = "../images/video/";
            if (!is_dir($targetDir)) {
                mkdir($targetDir, 0755, true);
            }
            
            $targetFilePath = $targetDir . $fileName;

            if (move_uploaded_file($file['tmp_name'], $targetFilePath)) {
                $vdoLocation = "images/video/" . $fileName;
            } else {
                header("Location: dashboard.php?error=upload&tab=videos");
                exit();
            }
        } else {
            header("Location: dashboard.php?error=upload&tab=videos");
            exit();
        }
    }

    $status = 1;
    $stmt = $conn->prepare("INSERT INTO tbl_video (title, vdo_location, status) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $title, $vdoLocation, $status);
    
    if ($stmt->execute()) {
        $stmt->close();
        header("Location: dashboard.php?msg=success&tab=videos");
        exit();
    } else {
        $stmt->close();
        if ($videoType === 'upload' && file_exists("../" . $vdoLocation)) {
            unlink("../" . $vdoLocation);
        }
        header("Location: dashboard.php?error=db&tab=videos");
        exit();
    }
}

header("Location: dashboard.php?error=invalid&tab=videos");
exit();
