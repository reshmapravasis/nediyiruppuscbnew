<?php
require_once 'auth.php';
require_once '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = (int)$_POST['id'];
    $title = trim($_POST['caption'] ?? '');

    if (isset($_FILES['image']) && !empty($_FILES['image']['name'])) {
        $allowed = ['jpg','jpeg','png','gif'];
        $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));

        if (in_array($ext, $allowed)) {
            $fileName = time() . '_' . basename($_FILES['image']['name']);
            $targetDir = "../images/gallery/";
            $targetFilePath = $targetDir . $fileName;

            if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath)) {
                $imgLocation = "images/gallery/" . $fileName;

                // Delete old image if it exists
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

                $updateStmt = $conn->prepare("UPDATE tbl_photos SET title = ?, img_location = ? WHERE id = ?");
                $updateStmt->bind_param("ssi", $title, $imgLocation, $id);
                $updateStmt->execute();
                $updateStmt->close();
            }
        }
    } else {
        // Update only the caption
        $updateStmt = $conn->prepare("UPDATE tbl_photos SET title = ? WHERE id = ?");
        $updateStmt->bind_param("si", $title, $id);
        $updateStmt->execute();
        $updateStmt->close();
    }
}

header("Location: dashboard.php?msg=success&tab=gallery");
exit;
