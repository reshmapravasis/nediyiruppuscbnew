<?php
session_save_path(sys_get_temp_dir());
session_start();
?>

<div class="bg-blue-900 text-white text-sm py-2 px-6 flex justify-between items-center">
    <div>📧 info@nediyiruppuscb.coms | 📞 0483 2712067</div>
    <div class="hidden md:block">Working: Mon-Fri (10am - 5pm) & Sat (10am - 5pm)</div>
</div>

<nav class="sticky top-0 bg-white shadow-md z-50 py-3 px-4 md:px-8 flex flex-wrap justify-between items-center">
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

    <!-- Mobile Menu Button -->
    <button id="mobile-menu-btn" class="lg:hidden text-blue-900 focus:outline-none p-2" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
    </button>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden w-full lg:hidden border-t border-gray-100 mt-4 pt-4 pb-2">
        <ul class="flex flex-col space-y-4 font-medium text-center text-gray-700">
            <li><a href="index.php" class="block hover:text-green-600 transition-colors">Home</a></li>
            <li><a href="about.php" class="block hover:text-green-600 transition-colors">About Us</a></li>
            <li><a href="services.php" class="block hover:text-green-600 transition-colors">Services</a></li>
            <li><a href="facilities.php" class="block hover:text-green-600 transition-colors">Facilities</a></li>
            <li><a href="gallery.php" class="block hover:text-green-600 transition-colors">Gallery</a></li>
            <li><a href="news.php" class="block hover:text-green-600 transition-colors">News & Events</a></li>
            <li><a href="branches.php" class="block hover:text-green-600 transition-colors">Branches</a></li>
            <li><a href="downloads.php" class="block hover:text-green-600 transition-colors">Downloads</a></li>
            <li><a href="contact.php" class="block hover:text-green-600 transition-colors">Contact</a></li>
        </ul>
    </div>
</nav>