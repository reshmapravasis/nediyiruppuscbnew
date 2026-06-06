<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposits - Nediyiruppu SCB</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="tailwind-config.js"></script>
</head>
<body class="bg-gray-50 font-sans text-gray-900">
    <div id="header-placeholder"></div>
    <main>
        <div class="bg-gradient-to-r from-[#0d4d6e] to-[#1d9c8d] py-20 text-center text-white">
            <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight">Deposit Schemes</h1>
            <p class="mt-4 text-lg opacity-80 font-light">Secure your hard-earned money while making it grow.</p>
        </div>
        <section class="max-w-4xl mx-auto py-16 px-6">
            <div class="bg-white rounded-[2rem] shadow-xl p-8 md:p-12 border-t-4 border-green-500 relative overflow-hidden">
                <div class="absolute top-0 right-0 p-8 opacity-5">
                    <span class="text-9xl">💰</span>
                </div>
                <div class="text-center mb-10 relative z-10">
                    <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-4xl">💰</span>
                    </div>
                    <h2 class="text-3xl font-bold text-blue-900">Our Deposit Products</h2>
                </div>
                <div class="space-y-6 text-gray-700 leading-relaxed text-lg relative z-10">
                    <p>We offer a variety of deposit schemes designed to offer maximum returns safely over time. Whether you are saving for a rainy day or planning for the future, we have a plan that fits your needs.</p>
                    
                    <div class="space-y-6 mt-8">
                        <div class="p-6 border border-gray-100 rounded-xl shadow-sm hover:shadow-md transition bg-gray-50">
                            <h3 class="text-xl font-bold text-blue-900 mb-2">Savings Bank Account</h3>
                            <p class="text-sm">Start your savings journey with absolute flexibility. Enjoy easy access to your funds while earning a steady interest rate. Ideal for daily transactions and building a financial cushion.</p>
                        </div>
                        
                        <div class="p-6 border border-gray-100 rounded-xl shadow-sm hover:shadow-md transition bg-gray-50">
                            <h3 class="text-xl font-bold text-blue-900 mb-2">Fixed Deposits (FD)</h3>
                            <p class="text-sm">Lock in your funds for a specific tenure and enjoy guaranteed, high-interest returns. We offer flexible tenures ranging from a few months to several years, with special premium rates for senior citizens.</p>
                        </div>

                        <div class="p-6 border border-gray-100 rounded-xl shadow-sm hover:shadow-md transition bg-gray-50">
                            <h3 class="text-xl font-bold text-blue-900 mb-2">Recurring Deposits (RD)</h3>
                            <p class="text-sm">Build a significant corpus by saving small, fixed amounts every month. A disciplined way to save that offers interest rates comparable to Fixed Deposits.</p>
                        </div>
                    </div>

                    <div class="mt-12 text-center">
                        <a href="contact.php" class="inline-block bg-[#0d4d6e] text-white font-bold px-10 py-4 rounded-full hover:bg-[#1d9c8d] transition-all transform hover:-translate-y-1 shadow-lg">Contact Us for Interest Rates</a>
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
