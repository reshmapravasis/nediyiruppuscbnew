<?php
session_start();
include 'config/db.php';

// Fetch images
$imageResult = mysqli_query($conn, "SELECT * FROM tbl_photos WHERE status = 1 ORDER BY date DESC");
$hasImages = mysqli_num_rows($imageResult) > 0;

// Fetch videos
$videoResult = mysqli_query($conn, "SELECT * FROM tbl_video WHERE status = 1 ORDER BY date DESC");
$hasVideos = mysqli_num_rows($videoResult) > 0;

// Merge for grid display (optional: you can interleave by date if needed)
$media = [];
while ($row = mysqli_fetch_assoc($imageResult)) {
    $media[] = ['type' => 'image', 'url' => $row['img_location'], 'title' => $row['title']];
}
while ($row = mysqli_fetch_assoc($videoResult)) {
    $media[] = ['type' => 'video', 'url' => $row['video_location'], 'title' => $row['title']];
}

// Sort by latest (assuming both tables have 'date')
usort($media, function($a, $b) {
    return strtotime($b['date'] ?? 0) - strtotime($a['date'] ?? 0);
});
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gallery - Nediyiruppu SCB</title>
<script src="https://cdn.tailwindcss.com"></script>
    <script src="tailwind-config.js"></script>
</head>

<body class="bg-gray-50 font-sans text-gray-900">
<div id="header-placeholder"></div>

<main>
    <div class="bg-gradient-to-r from-[#0d4d6e] to-[#1d9c8d] py-16 text-center text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-20"></div>
        <div class="relative z-10 px-6">
            <h1 class="text-5xl font-bold mb-4">Photo & Video Gallery</h1>
            <p class="text-xl text-blue-200 max-w-2xl mx-auto font-light">
                Glimpses of our events, programs, and community initiatives.
            </p>
        </div>
    </div>

    <section class="max-w-7xl mx-auto py-16 px-6">
        <?php if (empty($media)): ?>
            <div class="text-center text-gray-500 py-10">
                <p class="text-xl">No media added yet.</p>
            </div>
        <?php else: ?>
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <?php foreach ($media as $item): ?>
                    <div class="group relative rounded-xl overflow-hidden shadow-lg aspect-square cursor-pointer bg-gray-200"
                         onclick="launchFullScreen('<?= htmlspecialchars($item['url']) ?>', '<?= $item['type'] ?>')">

                        <?php if ($item['type'] === 'image'): ?>
                            <img src="<?= htmlspecialchars($item['url']) ?>"
                                 alt="<?= htmlspecialchars($item['title']) ?>"
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <?php else: ?>
                            <video src="<?= htmlspecialchars($item['url']) ?>" class="w-full h-full object-cover" muted></video>
                        <?php endif; ?>

                        <?php if (!empty($item['title'])): ?>
                            <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                <span class="text-white border border-white/50 px-4 py-2 rounded-full backdrop-blur-sm"><?= htmlspecialchars($item['title']) ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </section>
</main>

<div id="footer-placeholder"></div>

<!-- Fullscreen Container -->
<div id="fs-container" class="hidden fixed inset-0 bg-black z-[10000] flex-col items-center justify-center">
    <button onclick="exitFullScreen()" 
            class="absolute top-6 right-8 text-white/70 hover:text-white text-6xl z-[10001] cursor-pointer">&times;</button>
    
    <img id="fs-image" class="max-w-full max-h-full transition-all duration-300 hidden">
    <video id="fs-video" class="max-w-full max-h-full transition-all duration-300 hidden" controls autoplay></video>
</div>

<script>
// Component loaders
function loadComponent(id, file) {
    fetch(file).then(res => res.text()).then(html => document.getElementById(id).innerHTML = html);
}
loadComponent('header-placeholder', 'header.php');
loadComponent('footer-placeholder', 'footer.php');

// Fullscreen logic
const fsContainer = document.getElementById('fs-container');
const fsImage = document.getElementById('fs-image');
const fsVideo = document.getElementById('fs-video');

function launchFullScreen(url, type) {
    if (type === 'image') {
        fsImage.src = url;
        fsImage.classList.remove('hidden');
        fsVideo.classList.add('hidden');
    } else if (type === 'video') {
        fsVideo.src = url;
        fsVideo.classList.remove('hidden');
        fsImage.classList.add('hidden');
    }

    fsContainer.classList.remove('hidden');
    fsContainer.classList.add('flex');

    // Browser fullscreen
    const elem = fsContainer;
    if (elem.requestFullscreen) elem.requestFullscreen();
    else if (elem.webkitRequestFullscreen) elem.webkitRequestFullscreen();
    else if (elem.msRequestFullscreen) elem.msRequestFullscreen();
}

function exitFullScreen() {
    if (document.exitFullscreen) document.exitFullscreen();
    else if (document.webkitExitFullscreen) document.webkitExitFullscreen();
}

// Sync hidden state with browser fullscreen exit
document.addEventListener('fullscreenchange', handleFsExit);
document.addEventListener('webkitfullscreenchange', handleFsExit);

function handleFsExit() {
    if (!document.fullscreenElement && !document.webkitFullscreenElement) {
        fsContainer.classList.add('hidden');
        fsContainer.classList.remove('flex');
        fsImage.src = '';
        fsVideo.src = '';
        fsImage.classList.add('hidden');
        fsVideo.classList.add('hidden');
    }
}

// Close if clicking black background
fsContainer.addEventListener('click', function(e) {
    if (e.target === fsContainer) exitFullScreen();
});
</script>

</body>
</html>
