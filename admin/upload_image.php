<?php
require_once 'auth.php';
require_once '../config/db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES['image'])) {

    $title = trim($_POST['caption'] ?? ''); // using caption as title
    $file  = $_FILES['image'];

    // Allowed file types
    $allowTypes = ['jpg','jpeg','png','gif'];

    $fileName = time() . '_' . basename($file['name']);
    $targetDir = "../images/gallery/";
    $targetFilePath = $targetDir . $fileName;
    $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    if (!in_array($fileType, $allowTypes)) {
        header("Location: dashboard.php?error=type");
        exit();
    }

    if (move_uploaded_file($file['tmp_name'], $targetFilePath)) {

        // DB path (relative)
        $imgLocation = "images/gallery/" . $fileName;
        $status = 1; // visible by default

        $stmt = $conn->prepare(
            "INSERT INTO tbl_photos (title, img_location, status) VALUES (?, ?, ?)"
        );
        $stmt->bind_param("ssi", $title, $imgLocation, $status);
        $stmt->execute();
        $stmt->close();
    }
}

header("Location: dashboard.php");
exit();
