<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gold Loan - Nediyiruppu SCB</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="tailwind-config.js"></script>
</head>
<body class="bg-gray-50 font-sans text-gray-900">
    <div id="header-placeholder"></div>
    <main>
        <div class="bg-gradient-to-r from-[#0d4d6e] to-[#1d9c8d] py-20 text-center text-white">
            <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight">Gold Loan</h1>
            <p class="mt-4 text-lg opacity-80 font-light">Instant cash for your gold, with maximum security and minimum hassle.</p>
        </div>
        <section class="max-w-4xl mx-auto py-16 px-6">
            <div class="bg-white rounded-[2rem] shadow-xl p-8 md:p-12 border-t-4 border-yellow-500 relative overflow-hidden">
                <div class="absolute top-0 right-0 p-8 opacity-5">
                    <span class="text-9xl">✨</span>
                </div>
                <div class="text-center mb-10 relative z-10">
                    <div class="w-20 h-20 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-4xl">✨</span>
                    </div>
                    <h2 class="text-3xl font-bold text-blue-900">Why Choose Our Gold Loan?</h2>
                </div>
                <div class="space-y-6 text-gray-700 leading-relaxed text-lg relative z-10">
                    <p>At Nediyiruppu SCB, we understand that financial emergencies require quick and hassle-free solutions. Our Gold Loan schemes are designed to give you instant liquidity against your gold ornaments with the highest per-gram valuation in the market.</p>
                    
                    <h3 class="text-xl font-bold text-blue-900 mt-8 mb-4 border-b pb-2">Key Benefits</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-4 p-4 bg-gray-50 rounded-xl"><svg class="w-6 h-6 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> <div><strong class="text-blue-900 block mb-1">Highest Per Gram Rate</strong> Get maximum cash for your gold compared to market standards.</div></li>
                        <li class="flex items-start gap-4 p-4 bg-gray-50 rounded-xl"><svg class="w-6 h-6 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> <div><strong class="text-blue-900 block mb-1">Low Interest Rates</strong> Enjoy affordable interest structures tailored to your repayment capacity.</div></li>
                        <li class="flex items-start gap-4 p-4 bg-gray-50 rounded-xl"><svg class="w-6 h-6 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> <div><strong class="text-blue-900 block mb-1">Instant Disbursal</strong> Walk in with gold, walk out with cash in minutes with minimal documentation.</div></li>
                        <li class="flex items-start gap-4 p-4 bg-gray-50 rounded-xl"><svg class="w-6 h-6 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> <div><strong class="text-blue-900 block mb-1">100% Security</strong> Your valuables are stored in highly secure, insured, and modern strong rooms.</div></li>
                    </ul>

                    <div class="mt-12 text-center">
                        <a href="contact.php" class="inline-block bg-[#0d4d6e] text-white font-bold px-10 py-4 rounded-full hover:bg-[#1d9c8d] transition-all transform hover:-translate-y-1 shadow-lg">Visit Nearest Branch to Apply</a>
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
