<?php
require_once 'auth.php';
require_once '../config/db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES['image'])) {

    $title = trim($_POST['caption'] ?? ''); // using caption as title
    $file  = $_FILES['image'];

    // Allowed file types
    $allowTypes = ['jpg','jpeg','png','gif'];

    $fileType = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    
    // Generate a short filename to fit in varchar(50) limit for img_location
    $fileName = substr(md5(time() . basename($file['name'])), 0, 15) . '.' . $fileType;
    $targetDir = "../images/gallery/";
    $targetFilePath = $targetDir . $fileName;

    if (!in_array($fileType, $allowTypes)) {
        header("Location: dashboard.php?error=type&tab=gallery");
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
        if ($stmt->execute()) {
            $stmt->close();
            header("Location: dashboard.php?msg=success&tab=gallery");
            exit();
        } else {
            $stmt->close();
            // Delete the moved file since DB insert failed
            unlink($targetFilePath);
            header("Location: dashboard.php?error=db&tab=gallery");
            exit();
        }
    } else {
        header("Location: dashboard.php?error=upload&tab=gallery");
        exit();
    }
}

header("Location: dashboard.php?error=invalid&tab=gallery");
exit();
