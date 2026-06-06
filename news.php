<?php
include 'config/db.php';

$newsQuery = mysqli_query(
    $conn,
    "SELECT * FROM tbl_news 
     WHERE status = 1 
     ORDER BY news_date DESC"
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News & Events - Nediyiruppu SCB</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="tailwind-config.js"></script>
</head>

<body class="bg-gray-50 font-sans text-gray-900">

<div id="header-placeholder"></div>

<main>
    <!-- HERO -->
        <div class="bg-gradient-to-r from-[#0d4d6e] to-[#1d9c8d] py-16 text-center text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-20"></div>
        <div class="relative z-10">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">News & Events</h1>
            <p class="text-xl opacity-90">Latest updates and announcements from Nediyiruppu SCB</p>
        </div>
    </div>

    <!-- NEWS LIST -->
    <section class="py-16 px-6">
        <div class="max-w-4xl mx-auto space-y-6">

            <?php if (mysqli_num_rows($newsQuery) === 0): ?>
                <div class="text-center text-gray-500 py-10">
                    <p class="text-xl">No news updates available at the moment.</p>
                </div>
            <?php else: ?>

                <?php while ($news = mysqli_fetch_assoc($newsQuery)): ?>
                    <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition 
                                border-l-4 border-green-500 p-5">

                        <div class="flex flex-col md:flex-row gap-5 items-start">

                            <!-- LEFT: IMAGE -->
                            <?php if (!empty($news['news_img'])): ?>
                                <div class="w-full md:w-1/4 flex-shrink-0">
                                    <img src="<?= htmlspecialchars($news['news_img']) ?>"
                                        alt="News Image"
                                        class="w-full h-40 object-cover rounded-md">
                                </div>
                            <?php endif; ?>

                            <!-- RIGHT: CONTENT -->
                            <div class="flex-1">
                                <h3 class="text-lg md:text-xl font-semibold text-blue-900 mb-1">
                                    <?= htmlspecialchars($news['news_head']) ?>
                                </h3>

                                <p class="text-sm text-gray-700 leading-relaxed mb-3">
                                    <?= nl2br(htmlspecialchars($news['news_content'])) ?>
                                </p>

                                <div class="text-xs text-gray-500">
                                    <?= date('d M Y, h:i A', strtotime($news['news_date'])) ?>
                                </div>
                            </div>

                        </div>
                    </div>
                <?php endwhile; ?>


            <?php endif; ?>

        </div>
    </section>
</main>

<div id="footer-placeholder"></div>

<script>
function loadComponent(id, file) {
    fetch(file)
        .then(res => res.text())
        .then(html => document.getElementById(id).innerHTML = html);
}
loadComponent('header-placeholder', 'header.php');
loadComponent('footer-placeholder', 'footer.php');
</script>

</body>
</html>
