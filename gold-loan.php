<?php
session_save_path(__DIR__ . '/sessions');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gold Loan - Nediyiruppu SCB</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="tailwind-config.js"></script>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>
<body class="bg-gray-50 font-sans text-gray-900">
    <div id="header-placeholder"></div>
    <main>
        <div class="bg-gradient-to-r from-[#0d4d6e] to-[#1d9c8d] py-20 text-center text-white relative overflow-hidden">
            <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight relative z-10">Gold Loan</h1>
            <p class="mt-4 text-lg opacity-80 font-light relative z-10">Instant cash for your gold, with maximum security and minimum hassle.</p>
        </div>
        
        <!-- Floating Glassmorphic Banner -->
        <div class="relative z-20 -mt-7 max-w-4xl mx-auto px-6">
            <div class="bg-white/95 backdrop-blur-xl shadow-[0_10px_30px_-10px_rgba(13,77,110,0.4)] border border-white rounded-full py-4 px-6 md:px-10 text-center flex flex-col md:flex-row items-center justify-center gap-3 md:gap-5 transform hover:scale-[1.02] transition-transform duration-300">
                <div class="hidden md:flex relative h-4 w-4 shrink-0 items-center justify-center">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-yellow-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-3 w-3 bg-yellow-500"></span>
                </div>
                <p class="text-[#0d4d6e] font-black text-sm md:text-[15px] tracking-widest uppercase">
                    Get the Best Rates for Your Gold. Quick Processing. Trusted Service.
                </p>
                <div class="hidden md:flex relative h-4 w-4 shrink-0 items-center justify-center">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-yellow-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-3 w-3 bg-yellow-500"></span>
                </div>
            </div>
        </div>

        <section class="max-w-6xl mx-auto py-8 px-6 mt-4">
            

            <!-- Intro & Highlights -->
            <div class="bg-white rounded-[2.5rem] shadow-[0_10px_40px_-15px_rgba(0,0,0,0.1)] border border-gray-100 flex flex-col md:flex-row overflow-hidden mb-16 hover:shadow-2xl transition-shadow duration-500">
                <div class="md:w-5/12 relative group overflow-hidden">
                    <img src="images/Gold1.jpg" alt="Gold Loan" class="w-full h-full object-cover min-h-[350px] transform group-hover:scale-105 transition duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-yellow-900/80 via-yellow-900/20 to-transparent"></div>
                    <div class="absolute bottom-8 left-8 right-8">
                        <div class="inline-flex items-center gap-2 bg-yellow-400 text-yellow-900 px-5 py-2.5 rounded-full font-bold text-sm shadow-xl mb-3">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path></svg> 
                            Safe Gold Storage
                        </div>
                    </div>
                </div>
                
                <div class="md:w-7/12 p-8 md:p-14 flex flex-col justify-center relative bg-white">
                    <div class="absolute top-0 right-0 p-8 opacity-5 pointer-events-none">
                        <span class="text-9xl">✨</span>
                    </div>
                    
                    <div class="flex flex-wrap gap-3 mb-8 relative z-10">
                        <span class="inline-flex items-center gap-2 bg-blue-50 text-blue-700 px-4 py-2 rounded-full font-bold text-sm border border-blue-100 shadow-sm"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"></path></svg> Same-day disbursal</span>
                        <span class="inline-flex items-center gap-2 bg-green-50 text-green-700 px-4 py-2 rounded-full font-bold text-sm border border-green-100 shadow-sm"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Highest Valuation</span>
                    </div>

                    <div class="text-gray-700 leading-relaxed text-lg relative z-10">
                        <h2 class="text-[#0d4d6e] text-3xl md:text-4xl font-extrabold mb-6 tracking-tight leading-snug">Quick Access to Cash with Your Gold</h2>
                        <p class="mb-6">A Gold Loan allows you to borrow money by pledging your gold ornaments as collateral. It's a fast and secure way to get funds for emergencies, business, education, or personal use.</p>
                        <p class="font-semibold text-[#1d9c8d] text-xl flex items-center gap-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            Lowest Interest Rates Guaranteed
                        </p>
                    </div>
                </div>
            </div>

            <!-- Features, Documents, Security Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <!-- Features -->
                <div class="bg-white rounded-2xl p-8 shadow-md border border-gray-100 hover:shadow-lg transition">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                        <span class="text-2xl">⭐</span>
                    </div>
                    <h4 class="text-2xl font-bold text-[#0d4d6e] mb-4">Features</h4>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start gap-2"><svg class="w-5 h-5 text-blue-500 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Loan Amount: Based on purity & weight. Up to 75-90% of market value.</li>
                        <li class="flex items-start gap-2"><svg class="w-5 h-5 text-blue-500 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Interest Rate: Starts from 7% to 12% per annum.</li>
                        <li class="flex items-start gap-2"><svg class="w-5 h-5 text-blue-500 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Quick Disbursal: Approved & credited in 15–30 mins.</li>
                        <li class="flex items-start gap-2"><svg class="w-5 h-5 text-blue-500 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Full Safety: Vaults with insurance coverage.</li>
                    </ul>
                </div>

                <!-- Documents -->
                <div class="bg-white rounded-2xl p-8 shadow-md border border-gray-100 hover:shadow-lg transition">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-6">
                        <span class="text-2xl">📄</span>
                    </div>
                    <h4 class="text-2xl font-bold text-[#0d4d6e] mb-4">Documents Required</h4>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start gap-2"><svg class="w-5 h-5 text-green-500 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Valid ID proof (Aadhaar, Voter ID, PAN, etc.)</li>
                        <li class="flex items-start gap-2"><svg class="w-5 h-5 text-green-500 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Passport-size Photograph</li>
                        <li class="flex items-start gap-2"><svg class="w-5 h-5 text-green-500 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Signature Verification (optional)</li>
                    </ul>
                </div>

                <!-- Security -->
                <div class="bg-white rounded-2xl p-8 shadow-md border border-gray-100 hover:shadow-lg transition">
                    <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center mb-6">
                        <span class="text-2xl">🛡️</span>
                    </div>
                    <h4 class="text-2xl font-bold text-[#0d4d6e] mb-4">Security of Your Gold</h4>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start gap-2"><svg class="w-5 h-5 text-yellow-500 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Stored in high-security lockers</li>
                        <li class="flex items-start gap-2"><svg class="w-5 h-5 text-yellow-500 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Insured against theft and damage</li>
                        <li class="flex items-start gap-2"><svg class="w-5 h-5 text-yellow-500 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Returned in original condition</li>
                    </ul>
                </div>
            </div>

            <!-- Loan Plans -->
            <div class="text-center mb-10">
                <h2 class="text-3xl font-extrabold text-[#0d4d6e]">Our Gold Loan Plans</h2>
                <p class="text-gray-600 mt-2 text-lg">Choose the perfect plan tailored to your specific needs.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Standard Gold Loan -->
                <div class="bg-white rounded-[2rem] border border-gray-100 shadow-lg hover:shadow-2xl transition-all transform hover:-translate-y-2 p-8 text-center relative overflow-hidden group">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-50 to-white opacity-0 group-hover:opacity-100 transition duration-500"></div>
                    <div class="relative z-10">
                        <div class="bg-blue-100 text-blue-800 text-sm font-bold uppercase tracking-widest py-1 px-4 rounded-full inline-block mb-6">Popular</div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Standard</h3>
                        <div class="text-4xl font-extrabold text-[#0d4d6e] mb-6">9%<span class="text-lg font-medium text-gray-500">/p.a.</span></div>
                        <ul class="text-left space-y-4 mb-8 text-gray-700">
                            <li class="flex items-center gap-3"><svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> Competitive interest rate</li>
                            <li class="flex items-center gap-3"><svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> Fast approval & disbursal</li>
                            <li class="flex items-center gap-3"><svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> Secure & transparent process</li>
                        </ul>
                    </div>
                </div>

                <!-- Agricultural Gold Loan -->
                <div class="bg-[#0d4d6e] text-white rounded-[2rem] shadow-xl hover:shadow-2xl transition-all transform hover:-translate-y-2 p-8 text-center relative overflow-hidden group">
                    <div class="absolute inset-0 bg-gradient-to-br from-[#1d9c8d] to-[#0d4d6e] opacity-0 group-hover:opacity-100 transition duration-500"></div>
                    <div class="relative z-10">
                        <div class="bg-green-400 text-green-900 text-sm font-bold uppercase tracking-widest py-1 px-4 rounded-full inline-block mb-6">Best Value</div>
                        <h3 class="text-2xl font-bold mb-2">Agricultural</h3>
                        <div class="text-4xl font-extrabold mb-6">7%<span class="text-lg font-medium opacity-70">/p.a.</span></div>
                        <ul class="text-left space-y-4 mb-8 text-white opacity-90">
                            <li class="flex items-center gap-3"><svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> Special rate for farmers</li>
                            <li class="flex items-center gap-3"><svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> Easy documentation</li>
                            <li class="flex items-center gap-3"><svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> For genuine agricultural needs</li>
                        </ul>
                    </div>
                </div>

                <!-- Short-Term Gold Loan -->
                <div class="bg-white rounded-[2rem] border border-gray-100 shadow-lg hover:shadow-2xl transition-all transform hover:-translate-y-2 p-8 text-center relative overflow-hidden group">
                    <div class="absolute inset-0 bg-gradient-to-br from-yellow-50 to-white opacity-0 group-hover:opacity-100 transition duration-500"></div>
                    <div class="relative z-10">
                        <div class="bg-yellow-100 text-yellow-800 text-sm font-bold uppercase tracking-widest py-1 px-4 rounded-full inline-block mb-6">Quick Cash</div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Short-Term</h3>
                        <div class="text-4xl font-extrabold text-[#0d4d6e] mb-6">6%<span class="text-lg font-medium text-gray-500">/p.a.</span></div>
                        <p class="text-sm text-gray-500 mb-4 font-semibold italic">(Up to 3 Months)</p>
                        <ul class="text-left space-y-4 mb-8 text-gray-700">
                            <li class="flex items-center gap-3"><svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> Ideal for short-term needs</li>
                            <li class="flex items-center gap-3"><svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> Flexible repayment</li>
                            <li class="flex items-center gap-3"><svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> Hassle-free processing</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="mt-16 text-center flex flex-col md:flex-row items-center justify-center gap-6">
                <a href="contact.php" class="inline-block bg-[#0d4d6e] text-white font-bold px-12 py-3.5 rounded-full hover:bg-[#1d9c8d] transition-all transform hover:-translate-y-1 shadow-xl text-lg">Apply Now</a>
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
