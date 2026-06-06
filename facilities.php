<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nediyiruppu SCB - Modern Banking</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 font-sans text-gray-900">

    <div id="header-placeholder"></div>
    <main>

        <div class="bg-gradient-to-r from-blue-900 to-blue-700 py-20 text-center text-white">
            <h1 class="text-4xl font-extrabold tracking-tight">Facilities</h1>
            <p class="mt-4 text-lg opacity-80 font-light">Explore our advanced facilities and services.</p>
        </div>

        <section class="max-w-7xl mx-auto py-16 px-6">
            <h2 class="text-3xl font-bold text-center mb-12 text-blue-900">Advanced Facilities</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">

                <div class="relative group rounded-2xl overflow-hidden h-64 shadow-lg">
                    <img src="locker.jpg"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex flex-col justify-end p-6">
                        <h4 class="text-white font-bold text-xl">Safe Locker</h4>
                        <p class="text-gray-300 text-sm">Security for your valuables.</p>
                    </div>
                </div>

                <div class="relative group rounded-2xl overflow-hidden h-64 shadow-lg">
                    <img src="neeti-store.jpg"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex flex-col justify-end p-6">
                        <h4 class="text-white font-bold text-xl">Neeti Store</h4>
                        <p class="text-gray-300 text-sm">Quality medicines at low cost.</p>
                    </div>
                </div>

            </div>
        </section>
    </main>

    <div id="footer-placeholder"></div>
    <script>
        // COMPONENT LOADER LOGIC
        function loadComponent(id, file) {
            fetch(file)
                .then(response => response.text())
                .then(data => {
                    document.getElementById(id).innerHTML = data;
                    if (id === 'header-placeholder') highlightActiveLink();
                });
        }
        function highlightActiveLink() {
            const currentFile = window.location.pathname.split('/').pop() || 'index.html';
            const links = document.querySelectorAll('#header-placeholder nav ul li a');
            links.forEach(link => {
                if (link.getAttribute('href') === currentFile) {
                    link.classList.add('text-green-600', 'font-bold', 'border-b-2', 'border-green-600');
                }
            });
        }
        loadComponent('header-placeholder', 'header.php');
        loadComponent('footer-placeholder', 'footer.php');
    </script>