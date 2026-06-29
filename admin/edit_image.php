<?php
require_once 'auth.php';
require_once '../config/db.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header("Location: dashboard.php");
    exit;
}

$id = (int)$_GET['id'];
$stmt = $conn->prepare("SELECT * FROM tbl_photos WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$image = $result->fetch_assoc();
$stmt->close();

if (!$image) {
    header("Location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Gallery Image - Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../tailwind-config.js"></script>
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
</head>
<body class="bg-gray-50 text-gray-900">
    <header class="bg-blue-900 text-white py-4 px-8 flex justify-between items-center shadow-lg">
        <h1 class="text-xl font-bold">Edit Gallery Image</h1>
        <a href="dashboard.php" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded text-sm transition">Back to Dashboard</a>
    </header>

    <main class="max-w-3xl mx-auto py-10 px-6">
        <section class="bg-white p-8 rounded-xl shadow-md border border-gray-200">
            <h2 class="text-2xl font-bold text-blue-900 mb-6">✏️ Update Gallery Image</h2>
            <form action="update_image.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $image['id'] ?>">
                
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2">Caption (Title)</label>
                    <input type="text" name="caption" value="<?= htmlspecialchars($image['title']) ?>" class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>
                
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2">Current Image</label>
                    <div class="mb-2">
                        <img src="../<?= htmlspecialchars($image['img_location']) ?>" alt="Current Image" class="w-48 h-auto object-cover rounded shadow">
                    </div>
                    <label class="block text-gray-700 font-bold mb-2 mt-4">Replace Image (Optional)</label>
                    <input type="file" name="image" accept="image/*" class="w-full border border-gray-300 p-2 rounded-lg">
                </div>
                
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg font-bold hover:bg-blue-700 transition">Update Image</button>
            </form>
        </section>
    </main>
</body>
</html>
