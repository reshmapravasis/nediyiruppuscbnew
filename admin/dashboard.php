<?php
require_once 'auth.php';
require_once '../config/db.php';

// Fetch News
$newsResult = $conn->query("SELECT * FROM tbl_news ORDER BY news_id DESC");
$newsItems = [];
if ($newsResult && $newsResult->num_rows > 0) {
    while($row = $newsResult->fetch_assoc()) {
        $newsItems[] = $row;
    }
}

// Fetch Gallery Images
$galleryResult = $conn->query("SELECT * FROM tbl_photos ORDER BY id DESC");
$galleryItems = [];
if ($galleryResult && $galleryResult->num_rows > 0) {
    while($row = $galleryResult->fetch_assoc()) {
        $galleryItems[] = $row;
    }
}

// Fetch Videos
$videoResult = $conn->query("SELECT * FROM tbl_video ORDER BY id DESC");
$videoItems = [];
if ($videoResult && $videoResult->num_rows > 0) {
    while($row = $videoResult->fetch_assoc()) {
        $videoItems[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Nediyiruppu SCB</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../tailwind-config.js"></script>
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
    <script>
        function switchTab(tabId) {
            document.querySelectorAll('.tab-content').forEach(el => el.classList.add('hidden'));
            document.querySelectorAll('.tab-btn').forEach(el => {
                el.classList.remove('border-blue-600', 'text-blue-600');
                el.classList.add('border-transparent', 'text-gray-500');
            });
            
            document.getElementById(tabId).classList.remove('hidden');
            const activeBtn = document.querySelector(`[data-target="${tabId}"]`);
            activeBtn.classList.remove('border-transparent', 'text-gray-500');
            activeBtn.classList.add('border-blue-600', 'text-blue-600');
        }

        function toggleAddForm(formId) {
            const form = document.getElementById(formId);
            form.classList.toggle('hidden');
        }
    </script>
</head>
<body class="bg-gray-50 text-gray-900">

    <!-- Header -->
    <header class="bg-blue-900 text-white py-4 px-8 flex justify-between items-center shadow-lg">
        <div class="flex items-center gap-4">
            <img src="../images/Logo_trimmed.png" alt="Logo" class="h-10 w-auto bg-white rounded p-1">
            <h1 class="text-xl font-bold">Nediyiruppu SCB Admin</h1>
        </div>
        <a href="logout.php" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded text-sm transition">Logout</a>
    </header>

    <main class="max-w-6xl mx-auto py-10 px-6">
        
        <!-- Notification Messages -->
        <?php if (isset($_GET['msg']) && $_GET['msg'] === 'success'): ?>
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">The operation was completed successfully.</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3" onclick="this.parentElement.style.display='none';">
                    <svg class="fill-current h-6 w-6 text-green-500 cursor-pointer" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                </span>
            </div>
        <?php endif; ?>
        
        <?php if (isset($_GET['error'])): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6" role="alert">
                <strong class="font-bold">Error!</strong>
                <span class="block sm:inline">The operation failed. Please try again.</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3" onclick="this.parentElement.style.display='none';">
                    <svg class="fill-current h-6 w-6 text-red-500 cursor-pointer" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                </span>
            </div>
        <?php endif; ?>

        <!-- Tabs Navigation -->
        <div class="border-b border-gray-200 mb-8">
            <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                <button onclick="switchTab('tab-news')" data-target="tab-news" class="tab-btn whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm border-blue-600 text-blue-600">
                    Manage News
                </button>
                <button onclick="switchTab('tab-gallery')" data-target="tab-gallery" class="tab-btn whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300">
                    Manage Gallery
                </button>
                <button onclick="switchTab('tab-videos')" data-target="tab-videos" class="tab-btn whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300">
                    Manage Videos
                </button>
            </nav>
        </div>

        <!-- TAB: NEWS -->
        <div id="tab-news" class="tab-content">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-blue-900">News List</h2>
                <button onclick="toggleAddForm('add-news-form')" class="bg-green-600 text-white px-4 py-2 rounded shadow hover:bg-green-700 transition">
                    + Add News
                </button>
            </div>

            <!-- Add News Form (Hidden by default) -->
            <section id="add-news-form" class="bg-white p-6 rounded-xl shadow-md border border-gray-200 mb-8 hidden">
                <h3 class="text-xl font-bold text-blue-900 mb-4">📢 Add Latest News</h3>
                <form action="save_news.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">News Heading</label>
                        <input type="text" name="news_head" class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Enter news heading" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">News Content</label>
                        <textarea name="news_content" rows="4" class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Enter news details" required></textarea>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Optional Image</label>
                        <input type="file" name="news_img" accept="image/*" class="w-full border border-gray-300 p-2 rounded-lg">
                    </div>
                    <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded-lg font-bold hover:bg-green-700 transition">Save News</button>
                </form>
            </section>

            <!-- News Table -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Heading</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                            <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <?php if (empty($newsItems)): ?>
                            <tr><td colspan="4" class="px-6 py-4 text-center text-gray-500">No news found.</td></tr>
                        <?php else: ?>
                            <?php foreach ($newsItems as $news): ?>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <?php if (!empty($news['news_img'])): ?>
                                        <img src="../<?= htmlspecialchars($news['news_img']) ?>" alt="News Image" class="h-10 w-10 object-cover rounded">
                                    <?php else: ?>
                                        <div class="h-10 w-10 bg-gray-200 rounded flex items-center justify-center text-gray-400 text-xs">No img</div>
                                    <?php endif; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm font-medium text-gray-900"><?= htmlspecialchars($news['news_head']) ?></div>
                                    <div class="text-sm text-gray-500 truncate max-w-xs"><?= htmlspecialchars($news['news_content']) ?></div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <?= htmlspecialchars($news['news_date'] ?? 'N/A') ?>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="edit_news.php?id=<?= $news['news_id'] ?>" class="text-blue-600 hover:text-blue-900 mr-4">Edit</a>
                                    <a href="delete_news.php?id=<?= $news['news_id'] ?>" onclick="return confirm('Are you sure you want to delete this news item?');" class="text-red-600 hover:text-red-900">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- TAB: GALLERY -->
        <div id="tab-gallery" class="tab-content hidden">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-blue-900">Gallery Images</h2>
                <button onclick="toggleAddForm('add-gallery-form')" class="bg-blue-600 text-white px-4 py-2 rounded shadow hover:bg-blue-700 transition">
                    + Upload Image
                </button>
            </div>

            <!-- Upload Gallery Form (Hidden by default) -->
            <section id="add-gallery-form" class="bg-white p-6 rounded-xl shadow-md border border-gray-200 mb-8 hidden">
                <h3 class="text-xl font-bold text-blue-900 mb-4">🖼️ Upload Gallery Image</h3>
                <form action="upload_image.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Select Image</label>
                        <input type="file" name="image" class="w-full border border-gray-300 p-2 rounded-lg" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Caption (Optional)</label>
                        <input type="text" name="caption" class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Enter image caption">
                    </div>
                    <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg font-bold hover:bg-blue-700 transition">Upload Image</button>
                </form>
            </section>

            <!-- Gallery Grid -->
            <?php if (empty($galleryItems)): ?>
                <div class="bg-white p-8 text-center text-gray-500 rounded-lg shadow border border-gray-200">No gallery images found.</div>
            <?php else: ?>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <?php foreach ($galleryItems as $item): ?>
                    <div class="bg-white rounded-lg shadow overflow-hidden border border-gray-200">
                        <img src="../<?= htmlspecialchars($item['img_location']) ?>" alt="Gallery Image" class="w-full h-40 object-cover">
                        <div class="p-4">
                            <p class="text-sm font-medium text-gray-900 mb-2 truncate" title="<?= htmlspecialchars($item['title']) ?>">
                                <?= htmlspecialchars($item['title'] ?: 'Untitled') ?>
                            </p>
                            <div class="flex justify-between items-center text-sm">
                                <a href="edit_image.php?id=<?= $item['id'] ?>" class="text-blue-600 hover:text-blue-900">Edit</a>
                                <a href="delete_image.php?id=<?= $item['id'] ?>" onclick="return confirm('Are you sure you want to delete this image?');" class="text-red-600 hover:text-red-900">Delete</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>

        <!-- TAB: VIDEOS -->
        <div id="tab-videos" class="tab-content hidden">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-blue-900">Video Gallery List</h2>
                <button onclick="toggleAddForm('add-video-form')" class="bg-green-600 text-white px-4 py-2 rounded shadow hover:bg-green-700 transition">
                    + Add Video
                </button>
            </div>

            <!-- Add Video Form (Hidden by default) -->
            <section id="add-video-form" class="bg-white p-6 rounded-xl shadow-md border border-gray-200 mb-8 hidden">
                <h3 class="text-xl font-bold text-blue-900 mb-4">🎬 Add New Video</h3>
                <form action="save_video.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Video Title (Optional)</label>
                        <input type="text" name="title" class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Enter video title">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Video Source</label>
                        <div class="flex items-center gap-6 mb-3">
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" name="video_type" value="url" checked onchange="document.getElementById('video-url-input').classList.remove('hidden'); document.getElementById('video-file-input').classList.add('hidden');">
                                External URL (e.g., YouTube)
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" name="video_type" value="upload" onchange="document.getElementById('video-file-input').classList.remove('hidden'); document.getElementById('video-url-input').classList.add('hidden');">
                                Upload File
                            </label>
                        </div>
                        
                        <div id="video-url-input">
                            <input type="url" name="video_url" class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="https://www.youtube.com/watch?v=...">
                        </div>
                        <div id="video-file-input" class="hidden">
                            <input type="file" name="video_file" accept="video/mp4,video/webm,video/ogg" class="w-full border border-gray-300 p-2 rounded-lg">
                            <p class="text-xs text-gray-500 mt-1">Allowed formats: MP4, WebM, OGG. Max size: 50MB.</p>
                        </div>
                    </div>
                    
                    <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded-lg font-bold hover:bg-green-700 transition">Save Video</button>
                </form>
            </section>

            <!-- Video Grid -->
            <?php if (empty($videoItems)): ?>
                <div class="bg-white p-8 rounded-lg shadow-md text-center text-gray-500">
                    No videos found. Click "Add Video" to create one.
                </div>
            <?php else: ?>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    <?php foreach ($videoItems as $item): ?>
                    <div class="bg-white rounded-lg shadow-md border border-gray-200 overflow-hidden flex flex-col">
                        <div class="w-full h-40 bg-gray-900 flex items-center justify-center text-white relative">
                            <?php if(strpos($item['vdo_location'], 'youtube.com') !== false || strpos($item['vdo_location'], 'youtu.be') !== false): ?>
                                <svg class="w-16 h-16 text-red-600 opacity-90" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.5 12 3.5 12 3.5s-7.505 0-9.377.55a3.016 3.016 0 0 0-2.122 2.136C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.55 9.376.55 9.376.55s7.505 0 9.377-.55a3.016 3.016 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                            <?php else: ?>
                                <svg class="w-12 h-12 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zm12.553 1.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path></svg>
                            <?php endif; ?>
                        </div>
                        <div class="p-4 flex-grow flex flex-col">
                            <p class="text-sm font-medium text-gray-900 mb-2 truncate" title="<?= htmlspecialchars($item['title'] ?? '') ?>">
                                <?= htmlspecialchars($item['title'] ?: 'Untitled') ?>
                            </p>
                            <p class="text-xs text-gray-500 mb-3 truncate" title="<?= htmlspecialchars($item['vdo_location']) ?>">
                                <?= htmlspecialchars($item['vdo_location']) ?>
                            </p>
                            <div class="flex justify-between items-center mt-auto text-sm border-t border-gray-100 pt-2">
                                <a href="edit_video.php?id=<?= $item['id'] ?>" class="text-blue-600 hover:text-blue-900">Edit Title</a>
                                <form action="delete_video.php" method="POST" onsubmit="return confirm('Are you sure you want to delete this video?');">
                                    <input type="hidden" name="id" value="<?= $item['id'] ?>">
                                    <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>

    </main>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            <?php if (isset($_GET['tab'])): ?>
            switchTab('tab-<?= htmlspecialchars($_GET['tab']) ?>');
            <?php endif; ?>
            
            // Remove URL parameters so they don't persist on refresh
            if (window.history.replaceState) {
                const url = new URL(window.location);
                if(url.searchParams.has('msg') || url.searchParams.has('error')) {
                    url.searchParams.delete('msg');
                    url.searchParams.delete('error');
                    window.history.replaceState({path:url.href}, '', url.href);
                }
            }
        });
    </script>
</body>
</html>
