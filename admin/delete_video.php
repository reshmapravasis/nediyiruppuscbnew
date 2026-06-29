<?php
require_once 'auth.php';
require_once '../config/db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['id'])) {
    $id = intval($_POST['id']);

    // Fetch to see if it's a local file that needs deleting
    $stmt = $conn->prepare("SELECT vdo_location FROM tbl_video WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $video = $result->fetch_assoc();
    $stmt->close();

    if ($video) {
        $delStmt = $conn->prepare("DELETE FROM tbl_video WHERE id = ?");
        $delStmt->bind_param("i", $id);
        
        if ($delStmt->execute()) {
            // Check if it's a local file and delete it
            $location = $video['vdo_location'];
            if (strpos($location, 'images/video/') === 0 && file_exists("../" . $location)) {
                unlink("../" . $location);
            }
        }
        $delStmt->close();
    }
}

header("Location: dashboard.php?msg=success&tab=videos");
exit;
