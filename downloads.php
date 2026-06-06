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

        <div class="bg-gradient-to-r from-[#0d4d6e] to-[#1d9c8d] py-20 text-center text-white">
            <h1 class="text-4xl font-extrabold tracking-tight">Application Forms</h1>
            <p class="mt-4 text-lg opacity-80 font-light">Download, print, and submit to your nearest branch.</p>
        </div>

        <section class="max-w-5xl mx-auto py-12 px-6">
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-200">
                <table class="w-full text-left">
                    <thead class="bg-blue-900 text-white">
                        <tr>
                            <th class="px-6 py-4">Document Name</th>
                            <th class="px-6 py-4">Category</th>
                            <th class="px-6 py-4 text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        <tr class="hover:bg-blue-50 transition">
                            <td class="px-6 py-5 font-medium text-gray-800 italic">Savings Account Opening Form</td>
                            <td class="px-6 py-5"><span
                                    class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs">Deposits</span>
                            </td>
                            <td class="px-6 py-5 text-center">
                                <a href="#" class="inline-flex items-center text-blue-600 font-bold hover:underline">
                                    <span class="mr-2">📥</span> PDF
                                </a>
                            </td>
                        </tr>
                        <tr class="hover:bg-blue-50 transition">
                            <td class="px-6 py-5 font-medium text-gray-800 italic">Gold Loan Application</td>
                            <td class="px-6 py-5"><span
                                    class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full text-xs">Loans</span>
                            </td>
                            <td class="px-6 py-5 text-center">
                                <a href="#" class="inline-flex items-center text-blue-600 font-bold hover:underline">
                                    <span class="mr-2">📥</span> PDF
                                </a>
                            </td>
                        </tr>
                        <tr class="hover:bg-blue-50 transition">
                            <td class="px-6 py-5 font-medium text-gray-800 italic">Fixed Deposit (FD) Form</td>
                            <td class="px-6 py-5"><span
                                    class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs">Deposits</span>
                            </td>
                            <td class="px-6 py-5 text-center">
                                <a href="#" class="inline-flex items-center text-blue-600 font-bold hover:underline">
                                    <span class="mr-2">📥</span> PDF
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
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