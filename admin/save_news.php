<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once 'auth.php';
require_once __DIR__ . '/../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $newsHead = trim($_POST['news_head']);
    $newsContent = trim($_POST['news_content']);
    $newsImg = null;

    if ($newsHead !== '' && $newsContent !== '') {

        if (!empty($_FILES['news_img']['name'])) {

            $allowed = ['jpg','jpeg','png','gif'];
            $ext = strtolower(pathinfo($_FILES['news_img']['name'], PATHINFO_EXTENSION));

            if (in_array($ext, $allowed)) {

                $fileName = time().'_'.uniqid().'.'.$ext;
                $uploadDir = __DIR__ . '/../images/news/';
                $uploadPath = $uploadDir . $fileName;

                if (move_uploaded_file($_FILES['news_img']['tmp_name'], $uploadPath)) {
                    $newsImg = 'images/news/' . $fileName;
                }
            }
        }

        $stmt = $conn->prepare(
            "INSERT INTO tbl_news (news_head, news_content, news_img) VALUES (?, ?, ?)"
        );

        if (!$stmt) {
            die($conn->error);
        }

        $stmt->bind_param("sss", $newsHead, $newsContent, $newsImg);
        $stmt->execute();
        $stmt->close();
    }
}

header("Location: dashboard.php");
exit;
