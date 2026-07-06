<?php
require_once 'auth.php';
require_once '../config/db.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $newsHead = trim($_POST['news_head']);
    $newsContent = trim($_POST['news_content']);

    if (empty($newsHead) || empty($newsContent)) {
        die("Heading or content is empty.");
    }

    $newsImg = "";

    if (!empty($_FILES['news_img']['name'])) {

        $ext = strtolower(pathinfo($_FILES['news_img']['name'], PATHINFO_EXTENSION));

        $fileName = time() . "_" . uniqid() . "." . $ext;

        $uploadDir = "../images/news/";

        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        $uploadPath = $uploadDir . $fileName;

        if (!move_uploaded_file($_FILES['news_img']['tmp_name'], $uploadPath)) {
            die("Image upload failed.");
        }

        $newsImg = "images/news/" . $fileName;
    }

    $stmt = $conn->prepare("INSERT INTO tbl_news (news_head, news_content, news_img) VALUES (?, ?, ?)");

    if (!$stmt) {
        die("Prepare Error: " . $conn->error);
    }

    $stmt->bind_param("sss", $newsHead, $newsContent, $newsImg);

    if (!$stmt->execute()) {
        die("Insert Error: " . $stmt->error);
    }

    echo "News inserted successfully. ID = " . $conn->insert_id;
    exit;
}