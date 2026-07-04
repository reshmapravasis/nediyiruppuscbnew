<?php
session_save_path(sys_get_temp_dir());
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Non Banking Services - Nediyiruppu SCB</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="tailwind-config.js"></script>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>
<body class="bg-gray-50 font-sans text-gray-900">
    <div id="header-placeholder"></div>
    <main>
        <div class="bg-gradient-to-r from-[#0d4d6e] to-[#1d9c8d] py-20 text-center text-white">
            <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight">Non Banking Services</h1>
            <p class="mt-4 text-lg opacity-80 font-light">Value-added digital and utility services under one roof.</p>
        </div>

        
        <section class="max-w-4xl mx-auto py-8 px-6">
            <div class="bg-white rounded-[2rem] shadow-xl p-8 md:p-12 border-t-4 border-purple-500 relative overflow-hidden">
                <div class="absolute top-0 right-0 p-8 opacity-5">
                    <span class="text-9xl">📱</span>
                </div>
                <div class="text-center mb-10 relative z-10">
                    <div class="w-20 h-20 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-4xl">📱</span>
                    </div>
                    <h2 class="text-3xl font-bold text-blue-900">Beyond Traditional Banking</h2>
                </div>
                <div class="space-y-6 text-gray-700 leading-relaxed text-lg relative z-10">
                    <p>At Nediyiruppu SCB, we believe in making your life easier. That is why we provide a range of non-banking, digital, and utility services so you can handle your essential tasks directly through us.</p>
                    
                    <h3 class="text-xl font-bold text-blue-900 mt-8 mb-4 border-b pb-2">Available Services</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-4 p-4 bg-gray-50 rounded-xl border border-gray-100"><svg class="w-6 h-6 text-blue-500 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> <div><strong class="text-blue-900 block mb-1">Utility Bill Payments</strong> Easily pay your electricity, water, and telephone bills at our counters. Avoid the hassle of standing in multiple queues.</div></li>
                        <li class="flex items-start gap-4 p-4 bg-gray-50 rounded-xl border border-gray-100"><svg class="w-6 h-6 text-blue-500 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> <div><strong class="text-blue-900 block mb-1">Insurance Processing</strong> We offer guidance and facilitation for various life and general insurance schemes to secure your family's future.</div></li>
                        <li class="flex items-start gap-4 p-4 bg-gray-50 rounded-xl border border-gray-100"><svg class="w-6 h-6 text-blue-500 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> <div><strong class="text-blue-900 block mb-1">RTGS / NEFT Transfers</strong> Send and receive money to any bank account in India swiftly and securely with our electronic transfer facilities.</div></li>
                        <li class="flex items-start gap-4 p-4 bg-gray-50 rounded-xl border border-gray-100"><svg class="w-6 h-6 text-blue-500 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> <div><strong class="text-blue-900 block mb-1">Digital Assistance</strong> Need help with modern banking tech? Our staff is always ready to guide you on safe and efficient digital transactions.</div></li>
                    </ul>

                    <div class="mt-12 text-center flex flex-col md:flex-row items-center justify-center gap-6">
                        <a href="branches.php" class="inline-block bg-[#0d4d6e] text-white font-bold px-10 py-4 rounded-full hover:bg-[#1d9c8d] transition-all transform hover:-translate-y-1 shadow-lg">Find a Branch Near You</a>
                        <a href="services.php" class="inline-flex items-center gap-2 bg-white text-[#0d4d6e] border-2 border-[#0d4d6e] font-bold px-10 py-3.5 rounded-full hover:bg-gray-50 transition-all transform hover:-translate-y-1 shadow-lg text-lg group">
                            <svg class="w-5 h-5 transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                            Back to All Services
                        </a>
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
