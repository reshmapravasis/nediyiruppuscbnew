
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
        <div class="bg-gradient-to-r from-blue-900 to-blue-700 py-16 text-center text-white">
            <h1 class="text-4xl font-extrabold mb-2">Banking Services</h1>
            <p class="opacity-80">Flexible financial solutions tailored for the community.</p>
        </div>

        <section class="max-w-6xl mx-auto py-16 px-6">
            <div class="grid md:grid-cols-2 gap-12">

                <div class="space-y-6">
                    <h3 class="text-2xl font-bold text-green-700 border-b-2 border-green-200 pb-2 flex items-center">
                        <span class="mr-3">🏦</span> Deposit Schemes
                    </h3>
                    <div class="bg-white p-6 rounded-xl shadow-md border hover:border-green-500 transition">
                        <h4 class="font-bold text-lg text-blue-900">Savings Bank Account</h4>
                        <p class="text-gray-500 text-sm mt-1">Start your savings journey with us.</p>
                        <button class="mt-4 text-green-600 font-bold text-sm underline">View Rates →</button>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-md border hover:border-green-500 transition">
                        <h4 class="font-bold text-lg text-blue-900">Fixed & Recurring Deposits</h4>
                        <p class="text-gray-500 text-sm mt-1">Grow your wealth with high interest.</p>
                        <button class="mt-4 text-green-600 font-bold text-sm underline">Details →</button>
                    </div>
                </div>

                <div class="space-y-6">
                    <h3 class="text-2xl font-bold text-blue-800 border-b-2 border-blue-200 pb-2 flex items-center">
                        <span class="mr-3">💰</span> Loan Products
                    </h3>
                    <div class="bg-blue-50 p-6 rounded-xl shadow-md border-2 border-blue-200">
                        <div class="flex justify-between items-start">
                            <h4 class="font-bold text-lg text-blue-900">Gold Loan</h4>
                            <span class="bg-yellow-400 text-xs font-bold px-2 py-1 rounded">FASTEST</span>
                        </div>
                        <p class="text-gray-600 text-sm mt-1">Instant approval with low interest rates.</p>
                        <button class="mt-4 w-full bg-blue-900 text-white py-2 rounded-lg font-bold">Apply Now</button>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-md border hover:border-blue-500 transition">
                        <h4 class="font-bold text-lg text-blue-900">Agricultural & Personal Loans</h4>
                        <p class="text-gray-500 text-sm mt-1">Supporting farmers and local businesses.</p>
                        <button class="mt-4 text-blue-800 font-bold text-sm underline">Learn More →</button>
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