<?php
require_once 'auth.php';
require_once '../config/db.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header("Location: dashboard.php?tab=videos");
    exit;
}

$id = (int)$_GET['id'];
$stmt = $conn->prepare("SELECT * FROM tbl_video WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$video = $result->fetch_assoc();
$stmt->close();

if (!$video) {
    header("Location: dashboard.php?tab=videos");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Video Title - Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../tailwind-config.js"></script>
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
</head>
<body class="bg-gray-50 text-gray-900">
    <header class="bg-blue-900 text-white py-4 px-8 flex justify-between items-center shadow-lg">
        <div class="flex items-center gap-4">
            <img src="../images/Logo_trimmed.png" alt="Logo" class="h-10 w-auto bg-white rounded p-1">
            <h1 class="text-xl font-bold">Edit Video</h1>
        </div>
        <a href="dashboard.php?tab=videos" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded text-sm transition">Back to Dashboard</a>
    </header>

    <main class="max-w-3xl mx-auto py-10 px-6">
        <section class="bg-white p-8 rounded-xl shadow-md border border-gray-200">
            <h2 class="text-2xl font-bold text-blue-900 mb-6">✏️ Update Video Title</h2>
            <form action="update_video.php" method="POST">
                <input type="hidden" name="id" value="<?= $video['id'] ?>">
                
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2">Video Source</label>
                    <p class="text-gray-600 text-sm mb-4"><?= htmlspecialchars($video['vdo_location']) ?></p>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2">Title</label>
                    <input type="text" name="title" value="<?= htmlspecialchars($video['title'] ?? '') ?>" class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Enter video title">
                </div>
                
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg font-bold hover:bg-blue-700 transition">Update Title</button>
            </form>
        </section>
    </main>
</body>
</html>
