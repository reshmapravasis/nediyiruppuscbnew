<?php
session_save_path(sys_get_temp_dir());
require_once 'auth.php';
require_once '../config/db.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = (int)$_POST['id'];
    $title = trim($_POST['caption']);

    if (!empty($_FILES['image']['name'])) {

        $allowed = ['jpg','jpeg','png','gif'];
        $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));

        if (!in_array($ext, $allowed)) {
            die("Invalid image type.");
        }

        $fileName = time() . "_" . basename($_FILES['image']['name']);
        $uploadPath = "../images/gallery/" . $fileName;

        if (!move_uploaded_file($_FILES['image']['tmp_name'], $uploadPath)) {
            die("Image upload failed.");
        }

        $imgLocation = "images/gallery/" . $fileName;

        // Delete old image
        $stmt = $conn->prepare("SELECT img_location FROM tbl_photos WHERE id=?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $res = $stmt->get_result();

        if($row = $res->fetch_assoc()){
            $old = "../".$row['img_location'];
            if(file_exists($old)){
                unlink($old);
            }
        }

        $stmt->close();

        $stmt = $conn->prepare("UPDATE tbl_photos SET title=?, img_location=? WHERE id=?");
        $stmt->bind_param("ssi",$title,$imgLocation,$id);

    } else {

        $stmt = $conn->prepare("UPDATE tbl_photos SET title=? WHERE id=?");
        $stmt->bind_param("si",$title,$id);
    }

    if(!$stmt->execute()){
        die("Update Error : ".$stmt->error);
    }

    $stmt->close();
}

header("Location: dashboard.php?tab=gallery&msg=success");
exit;