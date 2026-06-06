<?php
require_once 'auth.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Nediyiruppu SCB</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../tailwind-config.js"></script>
</head>
<body class="bg-gray-50 text-gray-900">

    <!-- Header -->
    <header class="bg-blue-900 text-white py-4 px-8 flex justify-between items-center shadow-lg">
        <h1 class="text-xl font-bold">Admin Dashboard</h1>
        <a href="logout.php" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded text-sm transition">Logout</a>
    </header>

    <main class="max-w-4xl mx-auto py-10 px-6 space-y-12">

        <!-- Add News Section -->
        <section class="bg-white p-8 rounded-xl shadow-md border border-gray-200">
    <h2 class="text-2xl font-bold text-blue-900 mb-6 flex items-center">
        <span>📢 Add Latest News</span>
    </h2>

    <form action="save_news.php" method="POST" enctype="multipart/form-data">

        <!-- News Heading -->
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">News Heading</label>
            <input type="text"
                   name="news_head"
                   class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                   placeholder="Enter news heading"
                   required>
        </div>

        <!-- News Content -->
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">News Content</label>
            <textarea name="news_content"
                      rows="4"
                      class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                      placeholder="Enter news details"
                      required></textarea>
        </div>

        <!-- Optional Image -->
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Optional Image</label>
            <input type="file"
                   name="news_img"
                   accept="image/*"
                   class="w-full border border-gray-300 p-2 rounded-lg">
        </div>

        <button type="submit"
                class="bg-green-600 text-white px-6 py-2 rounded-lg font-bold hover:bg-green-700 transition">
            Add News
        </button>

    </form>
</section>


        <!-- Upload Gallery Image Section -->
        <section class="bg-white p-8 rounded-xl shadow-md border border-gray-200">
            <h2 class="text-2xl font-bold text-blue-900 mb-6 flex items-center">
                <span>🖼️ Upload Gallery Image</span>
            </h2>
            <form action="upload_image.php" method="POST" enctype="multipart/form-data">
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2">Select Image</label>
                    <input type="file" name="image" class="w-full border border-gray-300 p-2 rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2">Caption (Optional)</label>
                    <input type="text" name="caption" class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Enter image caption">
                </div>
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg font-bold hover:bg-blue-700 transition">
                    Upload Image
                </button>
            </form>
        </section>

    </main>

</body>
</html>
