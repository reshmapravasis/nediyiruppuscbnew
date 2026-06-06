<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loans & Advances - Nediyiruppu SCB</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="tailwind-config.js"></script>
</head>
<body class="bg-gray-50 font-sans text-gray-900">
    <div id="header-placeholder"></div>
    <main>
        <div class="bg-gradient-to-r from-[#0d4d6e] to-[#1d9c8d] py-20 text-center text-white">
            <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight">Loans & Advances</h1>
            <p class="mt-4 text-lg opacity-80 font-light">Flexible financial solutions tailored to turn your dreams into reality.</p>
        </div>
        <section class="max-w-4xl mx-auto py-16 px-6">
            <div class="bg-white rounded-[2rem] shadow-xl p-8 md:p-12 border-t-4 border-blue-500 relative overflow-hidden">
                <div class="absolute top-0 right-0 p-8 opacity-5">
                    <span class="text-9xl">🏠</span>
                </div>
                <div class="text-center mb-10 relative z-10">
                    <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-4xl">🏠</span>
                    </div>
                    <h2 class="text-3xl font-bold text-blue-900">Empowering Your Growth</h2>
                </div>
                <div class="space-y-6 text-gray-700 leading-relaxed text-lg relative z-10">
                    <p>Whether you are building a home, buying a vehicle, funding your child's education, or expanding your business, Nediyiruppu SCB is here to support you with flexible and affordable credit options.</p>
                    
                    <h3 class="text-xl font-bold text-blue-900 mt-8 mb-4 border-b pb-2">Our Loan Products</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="p-5 border border-gray-100 rounded-xl shadow-sm hover:shadow-md transition">
                            <h4 class="font-bold text-lg text-blue-900 flex items-center gap-2"><span class="text-2xl">🌾</span> Agricultural Loans</h4>
                            <p class="text-sm mt-2">Specialized financial support for farmers, covering crop cultivation, equipment purchase, and farming infrastructure at subsidized interest rates.</p>
                        </div>
                        <div class="p-5 border border-gray-100 rounded-xl shadow-sm hover:shadow-md transition">
                            <h4 class="font-bold text-lg text-blue-900 flex items-center gap-2"><span class="text-2xl">🚗</span> Vehicle Loans</h4>
                            <p class="text-sm mt-2">Drive home your dream car or two-wheeler with our quick-processing vehicle loans featuring easy EMIs.</p>
                        </div>
                        <div class="p-5 border border-gray-100 rounded-xl shadow-sm hover:shadow-md transition">
                            <h4 class="font-bold text-lg text-blue-900 flex items-center gap-2"><span class="text-2xl">🏡</span> Housing Loans</h4>
                            <p class="text-sm mt-2">Build or renovate your home with long-term repayment options and highly competitive interest rates.</p>
                        </div>
                        <div class="p-5 border border-gray-100 rounded-xl shadow-sm hover:shadow-md transition">
                            <h4 class="font-bold text-lg text-blue-900 flex items-center gap-2"><span class="text-2xl">💼</span> Business Advances</h4>
                            <p class="text-sm mt-2">Boost your business capital, manage inventory, or expand operations with our tailored commercial credit facilities.</p>
                        </div>
                    </div>

                    <div class="mt-12 text-center">
                        <a href="downloads.php" class="inline-block bg-[#0d4d6e] text-white font-bold px-10 py-4 rounded-full hover:bg-[#1d9c8d] transition-all transform hover:-translate-y-1 shadow-lg">Download Application Forms</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <div id="footer-placeholder"></div>
    <script>
        function loadComponent(id, file) {
            fetch(file)
                .then(response => response.text())
                .then(data => {
                    document.getElementById(id).innerHTML = data;
                });
        }
        loadComponent('header-placeholder', 'header.php');
        loadComponent('footer-placeholder', 'footer.php');
    </script>
</body>
</html>
