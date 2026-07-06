<?php
session_save_path(sys_get_temp_dir());
require_once 'auth.php';
require_once '../config/db.php';

error_reporting(E_ALL);
ini_set('display_errors',1);

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $id=(int)$_POST['id'];
    $title=trim($_POST['title']);

    $stmt=$conn->prepare("UPDATE tbl_video SET title=? WHERE id=?");
    $stmt->bind_param("si",$title,$id);

    if(!$stmt->execute()){
        die("Update Error : ".$stmt->error);
    }

    $stmt->close();
}

header("Location: dashboard.php?tab=videos&msg=success");
exit;