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
        


        <!-- Detailed Deposit Products -->
        <section class="max-w-6xl mx-auto px-6 space-y-12 pb-20">
            
            <!-- Savings Deposits -->
            <div class="flex flex-col md:flex-row items-center gap-10 bg-white rounded-[2rem] p-8 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.1)] border border-gray-100 hover:shadow-2xl transition-shadow duration-500">
                <div class="md:w-1/2">
                    <img src="images/sb.png" alt="Savings Deposits" class="w-full h-[300px] md:h-[400px] object-cover rounded-2xl shadow-lg">
                </div>
                <div class="md:w-1/2 space-y-4">
                    <div class="inline-block px-4 py-1 bg-green-100 text-green-800 font-bold rounded-full text-xs tracking-wide uppercase">Everyday Banking</div>
                    <h3 class="text-3xl font-extrabold text-[#0d4d6e]">Savings Deposits</h3>
                    <p class="text-gray-600 text-lg leading-relaxed">Start your savings journey with absolute flexibility.</p>
                    <ul class="space-y-3 pt-2 text-gray-700 font-medium">
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Helps you save money regularly and build financial security</li>
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Earn attractive interest on your deposits</li>
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Flexible deposits and withdrawals to suit your needs</li>
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Suitable for individuals and families</li>
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Provides a safe and secure place to keep your money</li>
                    </ul>
                </div>
            </div>

            <!-- Daily Deposit -->
            <div class="flex flex-col md:flex-row-reverse items-center gap-10 bg-white rounded-[2rem] p-8 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.1)] border border-gray-100 hover:shadow-2xl transition-shadow duration-500">
                <div class="md:w-1/2">
                    <img src="images/dd.jpg" alt="Daily Deposit" class="w-full h-[300px] md:h-[400px] object-cover rounded-2xl shadow-lg">
                </div>
                <div class="md:w-1/2 space-y-4">
                    <div class="inline-block px-4 py-1 bg-yellow-100 text-yellow-800 font-bold rounded-full text-xs tracking-wide uppercase">Consistent Growth</div>
                    <h3 class="text-3xl font-extrabold text-[#0d4d6e]">Daily Deposit</h3>
                    <p class="text-gray-600 text-lg leading-relaxed">Save small amounts every day and build a habit of regular saving.</p>
                    <ul class="space-y-3 pt-2 text-gray-700 font-medium">
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-yellow-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Earn attractive interest on your accumulated balance</li>
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-yellow-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Flexible and convenient for daily wage earners</li>
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-yellow-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Promotes financial discipline and savings growth</li>
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-yellow-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Easy access to your funds when needed</li>
                    </ul>
                </div>
            </div>

            <!-- Fixed Deposits -->
            <div class="flex flex-col md:flex-row items-center gap-10 bg-white rounded-[2rem] p-8 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.1)] border border-gray-100 hover:shadow-2xl transition-shadow duration-500">
                <div class="md:w-1/2">
                    <img src="images/Dep1.jpg" alt="Fixed Deposits" class="w-full h-[300px] md:h-[400px] object-cover rounded-2xl shadow-lg">
                </div>
                <div class="md:w-1/2 space-y-4">
                    <div class="inline-block px-4 py-1 bg-blue-100 text-blue-800 font-bold rounded-full text-xs tracking-wide uppercase">High Returns</div>
                    <h3 class="text-3xl font-extrabold text-[#0d4d6e]">Fixed Deposits</h3>
                    <p class="text-gray-600 text-lg leading-relaxed">Lock in your funds for a specific tenure and enjoy guaranteed, high-interest returns.</p>
                    <ul class="space-y-3 pt-2 text-gray-700 font-medium">
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-blue-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Earn higher interest compared to regular accounts</li>
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-blue-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Safe and secure investment with guaranteed returns</li>
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-blue-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Choose from flexible tenures to suit your goals</li>
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-blue-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Option for automatic renewal at maturity</li>
                    </ul>
                </div>
            </div>

            <div class="mt-16 text-center flex flex-col md:flex-row items-center justify-center gap-6">
                <a href="contact.php" class="inline-flex items-center gap-2 bg-[#0d4d6e] text-white font-bold px-10 py-4 rounded-full hover:bg-[#1d9c8d] transition-all transform hover:-translate-y-1 shadow-lg text-lg">
                    Contact Us for Interest Rates
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                </a>
                <a href="services.php" class="inline-flex items-center gap-2 bg-white text-[#0d4d6e] border-2 border-[#0d4d6e] font-bold px-10 py-3.5 rounded-full hover:bg-gray-50 transition-all transform hover:-translate-y-1 shadow-lg text-lg group">
                    <svg class="w-5 h-5 transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Back to All Services
                </a>
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
