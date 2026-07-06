<?php
session_save_path(sys_get_temp_dir());
session_start();
?>

<div class="bg-blue-900 text-white text-sm py-2 px-6 flex justify-between items-center">
    <div>📧 info@nediyiruppuscb.coms | 📞 0483 2712067</div>
    <div class="hidden md:block">Working: Mon-Fri (10am - 5pm) & Sat (10am - 5pm)</div>
</div>

<nav class="sticky top-0 bg-white shadow-md z-50 py-3 px-8 flex justify-between items-center">
    <a href="index.php" class="flex items-center">
        <img src="images/Logo_trimmed.png" alt="Nediyiruppu SCB" class="h-16 w-auto object-contain">
    </a>

    <ul class="hidden lg:flex space-x-6 font-medium">
        <li><a href="index.php" class="hover:text-green-600 transition-colors">Home</a></li>
        <li><a href="about.php" class="hover:text-green-600 transition-colors">About Us</a></li>
        <li><a href="services.php" class="hover:text-green-600 transition-colors">Services</a></li>
        <li><a href="facilities.php" class="hover:text-green-600 transition-colors">Facilities</a></li>
        <li><a href="gallery.php" class="hover:text-green-600 transition-colors">Gallery</a></li>
        <li><a href="news.php" class="hover:text-green-600 transition-colors">News & Events</a></li>
        <li><a href="branches.php" class="hover:text-green-600 transition-colors">Branches</a></li>
        <li><a href="downloads.php" class="hover:text-green-600 transition-colors">Downloads</a></li>
        <li><a href="contact.php" class="hover:text-green-600 transition-colors">Contact</a></li>
    </ul>

    <!-- <button onclick="window.location.href='admin/login.php'"
        class="bg-green-600 text-white px-6 py-2 rounded-full hover:bg-green-700 transition shadow-md hover:shadow-lg active:scale-95">
        Portal Login
    </button> -->
</nav>