<?php
require_once 'auth.php';
require_once '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newsId = (int)$_POST['news_id'];
    $newsHead = trim($_POST['news_head']);
    $newsContent = trim($_POST['news_content']);

    if ($newsHead !== '' && $newsContent !== '') {
        // Check if new image is uploaded
        if (!empty($_FILES['news_img']['name'])) {
            $allowed = ['jpg','jpeg','png','gif'];
            $ext = strtolower(pathinfo($_FILES['news_img']['name'], PATHINFO_EXTENSION));

            if (in_array($ext, $allowed)) {
                $fileName = time().'_'.uniqid().'.'.$ext;
                $uploadDir = __DIR__ . '/../images/news/';
                $uploadPath = $uploadDir . $fileName;

                if (move_uploaded_file($_FILES['news_img']['tmp_name'], $uploadPath)) {
                    $newsImg = 'images/news/' . $fileName;
                    
                    // Delete old image if it exists
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

                    $updateStmt = $conn->prepare("UPDATE tbl_news SET news_head = ?, news_content = ?, news_img = ? WHERE news_id = ?");
                    $updateStmt->bind_param("sssi", $newsHead, $newsContent, $newsImg, $newsId);
                    $updateStmt->execute();
                    $updateStmt->close();
                }
            }
        } else {
            // Update without changing image
            $updateStmt = $conn->prepare("UPDATE tbl_news SET news_head = ?, news_content = ? WHERE news_id = ?");
            $updateStmt->bind_param("ssi", $newsHead, $newsContent, $newsId);
            $updateStmt->execute();
            $updateStmt->close();
        }
    }
}

header("Location: dashboard.php?msg=success&tab=news");
exit;
