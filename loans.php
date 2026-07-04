<?php
session_save_path(sys_get_temp_dir());
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loans & Advances - Nediyiruppu SCB</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="tailwind-config.js"></script>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>
<body class="bg-gray-50 font-sans text-gray-900">
    <div id="header-placeholder"></div>
    <main>
        <div class="bg-gradient-to-r from-[#0d4d6e] to-[#1d9c8d] py-20 text-center text-white">
            <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight">Loans & Advances</h1>
            <p class="mt-4 text-lg opacity-80 font-light">Flexible financial solutions tailored to turn your dreams into reality.</p>
        </div>
        


        <!-- Detailed Loan Products -->
        <section class="max-w-6xl mx-auto px-6 space-y-12 pb-20">
            
            <!-- Property Loan -->
            <div class="flex flex-col md:flex-row items-center gap-10 bg-white rounded-[2rem] p-8 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.1)] border border-gray-100 hover:shadow-2xl transition-shadow duration-500">
                <div class="md:w-1/2">
                    <img src="images/propert.png" alt="Property Loan" class="w-full h-[300px] md:h-[400px] object-cover rounded-2xl shadow-lg">
                </div>
                <div class="md:w-1/2 space-y-4">
                    <div class="inline-block px-4 py-1 bg-blue-100 text-blue-800 font-bold rounded-full text-xs tracking-wide uppercase">Secured</div>
                    <h3 class="text-3xl font-extrabold text-[#0d4d6e]">Property Loan</h3>
                    <p class="text-gray-600 text-lg leading-relaxed">Get funding against your property for personal or business needs.</p>
                    <ul class="space-y-3 pt-2 text-gray-700 font-medium">
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Competitive interest rates</li>
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Flexible repayment tenure</li>
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Loan based on property value</li>
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Simple documentation</li>
                    </ul>
                </div>
            </div>

            <!-- Pronote Loan -->
            <div class="flex flex-col md:flex-row-reverse items-center gap-10 bg-white rounded-[2rem] p-8 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.1)] border border-gray-100 hover:shadow-2xl transition-shadow duration-500">
                <div class="md:w-1/2">
                    <img src="images/pronot.jpg" alt="Pronote Loan" class="w-full h-[300px] md:h-[400px] object-cover rounded-2xl shadow-lg">
                </div>
                <div class="md:w-1/2 space-y-4">
                    <div class="inline-block px-4 py-1 bg-green-100 text-green-800 font-bold rounded-full text-xs tracking-wide uppercase">Quick Finance</div>
                    <h3 class="text-3xl font-extrabold text-[#0d4d6e]">Pronote Loan</h3>
                    <p class="text-gray-600 text-lg leading-relaxed">For buying electronics, appliances, or other consumer goods. Short-term financial help based on a promissory note.</p>
                    <ul class="space-y-3 pt-2 text-gray-700 font-medium">
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-blue-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Quick processing</li>
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-blue-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Minimal documentation</li>
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-blue-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Ideal for urgent cash needs</li>
                    </ul>
                </div>
            </div>

            <!-- Consumer Loan -->
            <div class="flex flex-col md:flex-row items-center gap-10 bg-white rounded-[2rem] p-8 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.1)] border border-gray-100 hover:shadow-2xl transition-shadow duration-500">
                <div class="md:w-1/2">
                    <img src="images/consu.jpg" alt="Consumer Loan" class="w-full h-[300px] md:h-[400px] object-cover rounded-2xl shadow-lg">
                </div>
                <div class="md:w-1/2 space-y-4">
                    <div class="inline-block px-4 py-1 bg-purple-100 text-purple-800 font-bold rounded-full text-xs tracking-wide uppercase">Easy EMIs</div>
                    <h3 class="text-3xl font-extrabold text-[#0d4d6e]">Consumer Loan</h3>
                    <p class="text-gray-600 text-lg leading-relaxed">For buying electronics, appliances, or other consumer goods.</p>
                    <ul class="space-y-3 pt-2 text-gray-700 font-medium">
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-purple-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Affordable EMIs</li>
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-purple-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Attractive interest rates</li>
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-purple-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Flexible loan amount and term</li>
                    </ul>
                </div>
            </div>

            <!-- Deposit Loan -->
            <div class="flex flex-col md:flex-row-reverse items-center gap-10 bg-white rounded-[2rem] p-8 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.1)] border border-gray-100 hover:shadow-2xl transition-shadow duration-500">
                <div class="md:w-1/2">
                    <img src="images/deposit.jpg" alt="Deposit Loan" class="w-full h-[300px] md:h-[400px] object-cover rounded-2xl shadow-lg">
                </div>
                <div class="md:w-1/2 space-y-4">
                    <div class="inline-block px-4 py-1 bg-yellow-100 text-yellow-800 font-bold rounded-full text-xs tracking-wide uppercase">Smart Borrowing</div>
                    <h3 class="text-3xl font-extrabold text-[#0d4d6e]">Deposit Loan</h3>
                    <p class="text-gray-600 text-lg leading-relaxed">Get a loan against your fixed deposits with us.</p>
                    <ul class="space-y-3 pt-2 text-gray-700 font-medium">
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-yellow-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Low interest</li>
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-yellow-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> No need to break your FD</li>
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-yellow-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Instant approval</li>
                    </ul>
                </div>
            </div>

            <!-- Kudumbashree Loan -->
            <div class="flex flex-col md:flex-row items-center gap-10 bg-white rounded-[2rem] p-8 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.1)] border border-gray-100 hover:shadow-2xl transition-shadow duration-500">
                <div class="md:w-1/2">
                    <img src="images/kudumb.jpg" alt="Kudumbashree Loan" class="w-full h-[300px] md:h-[400px] object-cover rounded-2xl shadow-lg">
                </div>
                <div class="md:w-1/2 space-y-4">
                    <div class="inline-block px-4 py-1 bg-teal-100 text-teal-800 font-bold rounded-full text-xs tracking-wide uppercase">Community First</div>
                    <h3 class="text-3xl font-extrabold text-[#0d4d6e]">Kudumbashree Loan</h3>
                    <p class="text-gray-600 text-lg leading-relaxed">Linkage loan schemes for Kudumbashree group members.</p>
                    <ul class="space-y-3 pt-2 text-gray-700 font-medium">
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-teal-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Empowering women entrepreneurs</li>
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-teal-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Group-based loan model</li>
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-teal-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Subsidized interest (if applicable)</li>
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-teal-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Capacity-building and support</li>
                    </ul>
                </div>
            </div>

            <div class="mt-16 text-center flex flex-col md:flex-row items-center justify-center gap-6">
                <a href="downloads.php" class="inline-flex items-center gap-2 bg-[#0d4d6e] text-white font-bold px-10 py-4 rounded-full hover:bg-[#1d9c8d] transition-all transform hover:-translate-y-1 shadow-lg text-lg">
                    Download Application Forms 
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
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
