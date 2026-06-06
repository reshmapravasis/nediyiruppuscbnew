<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nediyiruppu SCB - Modern Banking</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="tailwind-config.js"></script>
</head>

<body class="bg-gray-50 font-sans text-gray-900">
    <div id="header-placeholder"></div>
    <main>
        <div class="bg-gradient-to-r from-[#0d4d6e] to-[#1d9c8d] py-16 text-center text-white">
            <h1 class="text-4xl font-extrabold mb-2">Contact Us</h1>
            <p class="opacity-80">We are here to help you with your banking needs.</p>
        </div>


        <section class="max-w-6xl mx-auto py-16 px-6">
            <div class="grid md:grid-cols-2 gap-0 shadow-2xl rounded-3xl overflow-hidden border">

                <div class="bg-blue-900 p-12 text-white">
                    <h2 class="text-2xl font-bold mb-8">Head Office Details</h2>
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <span class="text-2xl">📍</span>
                            <p class="opacity-90 italic">Nediyiruppu SCB, Kondotty PO,<br>Malappuram Dt, Kerala - 673638
                            </p>
                        </div>
                        <div class="flex items-center space-x-4">
                            <span class="text-2xl">📞</span>
                            <p class="opacity-90">0483 2712067 / 0483 2710167</p>
                        </div>
                        <div class="flex items-center space-x-4">
                            <span class="text-2xl">📧</span>
                            <p class="opacity-90">info@nediyiruppuscb.com</p>
                        </div>
                    </div>

                    <div class="mt-12 p-6 bg-blue-800 rounded-2xl">
                        <h4 class="font-bold mb-2">Working Hours:</h4>
                        <p class="text-sm opacity-80">Mon - Fri: 10:00 AM to 05:00 PM</p>
                        <p class="text-sm opacity-80">Sat: 10:00 AM to 02:00 PM</p>
                    </div>
                </div>

                <div class="bg-white p-12">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Send a Message</h3>
                    <form action="#" class="space-y-4">
                        <input type="text" placeholder="Your Name"
                            class="w-full p-4 bg-gray-50 border rounded-xl outline-none focus:border-green-500">
                        <input type="email" placeholder="Email Address"
                            class="w-full p-4 bg-gray-50 border rounded-xl outline-none focus:border-green-500">
                        <textarea placeholder="How can we help you?" rows="4"
                            class="w-full p-4 bg-gray-50 border rounded-xl outline-none focus:border-green-500"></textarea>
                        <button
                            class="w-full bg-green-600 text-white font-bold py-4 rounded-xl hover:bg-green-700 transition shadow-lg">Submit
                            Request</button>
                    </form>
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