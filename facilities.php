<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nediyiruppu SCB - Modern Banking</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="tailwind-config.js"></script>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>

<body class="bg-gray-50 font-sans text-gray-900">

    <div id="header-placeholder"></div>
    <main>

        <div class="bg-gradient-to-r from-[#0d4d6e] to-[#1d9c8d] py-20 text-center text-white">
            <h1 class="text-4xl font-extrabold tracking-tight">Facilities</h1>
            <p class="mt-4 text-lg opacity-80 font-light">Explore our advanced facilities and services.</p>
        </div>

        <section class="max-w-6xl mx-auto py-16 px-6 space-y-12">
            
            <!-- Core Banking -->
            <div class="group flex flex-col md:flex-row items-center gap-10 bg-white rounded-[2rem] p-8 md:p-10 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.1)] border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-500">
                <div class="md:w-5/12 flex justify-center overflow-hidden rounded-3xl">
                    <img src="images/corebank.png" alt="Core Bank" class="w-full max-w-sm h-auto rounded-3xl shadow-lg object-cover group-hover:scale-110 transition-transform duration-700">
                </div>
                <div class="md:w-7/12 space-y-4">
                    <h2 class="text-3xl font-extrabold text-blue-900 tracking-wide group-hover:text-[#1d9c8d] transition-colors duration-300">Core Banking</h2>
                    <ul class="space-y-3 pt-4 text-gray-700 font-medium">
                        <li class="flex items-start gap-3"><svg class="w-6 h-6 text-green-500 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Anywhere Banking – Deposit, withdraw, and access your account from any branch.</li>
                        <li class="flex items-start gap-3"><svg class="w-6 h-6 text-green-500 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Faster Transactions – Real-time fund transfers and account updates.</li>
                        <li class="flex items-start gap-3"><svg class="w-6 h-6 text-green-500 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Digital Banking – Access services through mobile and internet banking.</li>
                        <li class="flex items-start gap-3"><svg class="w-6 h-6 text-green-500 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Convenience & Security – Improved service speed with secure banking technology.</li>
                    </ul>
                </div>
            </div>

            <!-- NEFT -->
            <div class="group flex flex-col md:flex-row-reverse items-center gap-10 bg-white rounded-[2rem] p-8 md:p-10 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.1)] border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-500">
                <div class="md:w-5/12 flex justify-center overflow-hidden rounded-3xl">
                    <img src="images/NEFT.jpg" alt="NEFT" class="w-full max-w-sm h-auto rounded-3xl shadow-lg object-cover group-hover:scale-110 transition-transform duration-700">
                </div>
                <div class="md:w-7/12 space-y-4">
                    <h2 class="text-3xl font-extrabold text-blue-900 tracking-wide group-hover:text-[#1d9c8d] transition-colors duration-300">NEFT</h2>
                    <ul class="space-y-3 pt-4 text-gray-700 font-medium">
                        <li class="flex items-start gap-3"><svg class="w-6 h-6 text-blue-600 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> Available 24x7 via online/mobile banking.</li>
                        <li class="flex items-start gap-3"><svg class="w-6 h-6 text-blue-600 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> Operated by: Reserve Bank of India (RBI).</li>
                        <li class="flex items-start gap-3"><svg class="w-6 h-6 text-blue-600 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> No physical cheque or demand draft required – everything is processed digitally.</li>
                    </ul>
                </div>
            </div>

            <!-- RTGS -->
            <div class="group flex flex-col md:flex-row items-center gap-10 bg-white rounded-[2rem] p-8 md:p-10 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.1)] border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-500">
                <div class="md:w-5/12 flex justify-center overflow-hidden rounded-3xl">
                    <img src="images/rtgs.jpg" alt="RTGS" class="w-full max-w-sm h-auto rounded-3xl shadow-lg object-cover group-hover:scale-110 transition-transform duration-700">
                </div>
                <div class="md:w-7/12 space-y-4">
                    <h2 class="text-3xl font-extrabold text-blue-900 tracking-wide group-hover:text-[#1d9c8d] transition-colors duration-300">RTGS</h2>
                    <ul class="space-y-3 pt-4 text-gray-700 font-medium">
                        <li class="flex items-start gap-3"><svg class="w-6 h-6 text-green-500 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Gross Settlement: Each transaction is settled individually.</li>
                        <li class="flex items-start gap-3"><svg class="w-6 h-6 text-green-500 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Safe & Secure: Operated and regulated by the Reserve Bank of India (RBI).</li>
                        <li class="flex items-start gap-3"><svg class="w-6 h-6 text-green-500 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> For High-Value Transactions where time is critical.</li>
                    </ul>
                </div>
            </div>

            <!-- SMS Banking -->
            <div class="group flex flex-col md:flex-row-reverse items-center gap-10 bg-white rounded-[2rem] p-8 md:p-10 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.1)] border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-500">
                <div class="md:w-5/12 flex justify-center overflow-hidden rounded-3xl">
                    <img src="images/msms.jpg" alt="SMS Banking" class="w-full max-w-sm h-auto rounded-3xl shadow-lg object-cover group-hover:scale-110 transition-transform duration-700">
                </div>
                <div class="md:w-7/12 space-y-4">
                    <h2 class="text-3xl font-extrabold text-blue-900 tracking-wide group-hover:text-[#1d9c8d] transition-colors duration-300">SMS Banking</h2>
                    <ul class="space-y-3 pt-4 text-gray-700 font-medium">
                        <li class="flex items-start gap-3"><svg class="w-6 h-6 text-blue-600 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> Balance Inquiry & Mini Statement</li>
                        <li class="flex items-start gap-3"><svg class="w-6 h-6 text-blue-600 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> Fund Transfer Requests</li>
                        <li class="flex items-start gap-3"><svg class="w-6 h-6 text-blue-600 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> Cheque Book Request</li>
                        <li class="flex items-start gap-3"><svg class="w-6 h-6 text-blue-600 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> Bill Reminders</li>
                    </ul>
                </div>
            </div>

            <!-- Mobile Banking -->
            <div class="group flex flex-col md:flex-row items-center gap-10 bg-white rounded-[2rem] p-8 md:p-10 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.1)] border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-500">
                <div class="md:w-5/12 flex justify-center overflow-hidden rounded-3xl">
                    <img src="images/mobile.jpg" alt="Mobile Banking" class="w-full max-w-sm h-auto rounded-3xl shadow-lg object-cover group-hover:scale-110 transition-transform duration-700">
                </div>
                <div class="md:w-7/12 space-y-4">
                    <h2 class="text-3xl font-extrabold text-blue-900 tracking-wide group-hover:text-[#1d9c8d] transition-colors duration-300">Mobile Banking</h2>
                    <ul class="space-y-3 pt-4 text-gray-700 font-medium">
                        <li class="flex items-start gap-3"><svg class="w-6 h-6 text-green-500 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Account Balance Check – View real-time balances of all linked accounts.</li>
                        <li class="flex items-start gap-3"><svg class="w-6 h-6 text-green-500 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> UPI Payments – Send or receive money using UPI ID, QR code, or phone number.</li>
                        <li class="flex items-start gap-3"><svg class="w-6 h-6 text-green-500 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Bill Payments – Pay electricity, water, phone, DTH, gas, and credit card bills.</li>
                        <li class="flex items-start gap-3"><svg class="w-6 h-6 text-green-500 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Mobile/DTH Recharge & Loan EMI Payment</li>
                    </ul>
                </div>
            </div>

            <!-- Locker Facility -->
            <div class="group flex flex-col md:flex-row-reverse items-center gap-10 bg-white rounded-[2rem] p-8 md:p-10 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.1)] border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-500">
                <div class="md:w-5/12 flex justify-center overflow-hidden rounded-3xl">
                    <img src="images/locker.jpg" alt="Locker Facility" class="w-full max-w-sm h-auto rounded-3xl shadow-lg object-cover group-hover:scale-110 transition-transform duration-700">
                </div>
                <div class="md:w-7/12 space-y-4">
                    <h2 class="text-3xl font-extrabold text-blue-900 tracking-wide group-hover:text-[#1d9c8d] transition-colors duration-300">Locker Facility</h2>
                    <ul class="space-y-3 pt-4 text-gray-700 font-medium">
                        <li class="flex items-start gap-3"><svg class="w-6 h-6 text-blue-600 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> High Security – Advanced safety measures to protect your valuables.</li>
                        <li class="flex items-start gap-3"><svg class="w-6 h-6 text-blue-600 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> Different Locker Sizes – Available as per your requirement.</li>
                        <li class="flex items-start gap-3"><svg class="w-6 h-6 text-blue-600 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> Easy Accessibility – Operate your locker during bank working hours.</li>
                        <li class="flex items-start gap-3"><svg class="w-6 h-6 text-blue-600 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> Peace of Mind – Protect your assets from theft, loss, or damage.</li>
                    </ul>
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