
<?php
session_save_path(sys_get_temp_dir());
session_start();
?>
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
                <div class="bg-gradient-to-r from-[#0d4d6e] to-[#1d9c8d] py-16 text-center text-white">
            <h1 class="text-4xl font-extrabold mb-2">Banking Services</h1>
            <p class="opacity-80">Flexible financial solutions tailored for the community.</p>
        </div>

        <style>
            @keyframes scroll {
                0% { transform: translateX(0); }
                100% { transform: translateX(-100%); }
            }
            .scroll-wrapper {
                display: flex;
                overflow: hidden;
                width: 100%;
                padding: 1rem 0;
            }
            .scroll-track {
                display: flex;
                gap: 2rem;
                padding-right: 2rem;
                min-width: max-content;
                animation: scroll 30s linear infinite;
            }
            .scroll-wrapper:hover .scroll-track {
                animation-play-state: paused;
            }
        </style>

        <section class="max-w-[1400px] mx-auto py-10 px-4">
            <div class="scroll-wrapper">
                <!-- Track 1 -->
                <div class="scroll-track">
                    
                    <!-- Gold Loan -->
                    <div class="flex-shrink-0 w-[350px] bg-white rounded-[2rem] p-8 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.1)] border border-gray-100 hover:shadow-2xl transition-shadow duration-500 flex flex-col">
                        <div class="flex justify-center mb-6">
                            <img src="images/Gold1.jpg" alt="Gold Loan" class="w-40 h-40 object-cover rounded-2xl shadow-lg aspect-square">
                        </div>
                        <div class="text-center space-y-4 flex-grow">
                            <div class="inline-block px-4 py-1 bg-yellow-100 text-yellow-800 font-bold rounded-full text-xs tracking-wide uppercase">Fastest Processing</div>
                            <h2 class="text-2xl font-extrabold text-blue-900">Gold Loan</h2>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Unlock the true value of your gold instantly. We offer the highest per-gram rate in the market with absolute security for your assets and minimal documentation.
                            </p>
                            <ul class="text-left space-y-2 pt-4 text-gray-700 text-sm font-medium">
                                <li class="flex items-center gap-3"><svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Instant Cash Disbursal</li>
                                <li class="flex items-center gap-3"><svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Lowest Interest Rates</li>
                                <li class="flex items-center gap-3"><svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Flexible Repayment</li>
                                <li class="flex items-center gap-3"><svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> 100% Secure Storage</li>
                            </ul>
                        </div>
                        <div class="pt-6 text-center mt-auto">
                            <a href="gold-loan.php" class="inline-flex items-center gap-2 bg-yellow-500 text-white font-bold px-6 py-2 rounded-full hover:bg-yellow-600 transition-colors">
                                Explore Gold Loan <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Deposits -->
                    <div class="flex-shrink-0 w-[350px] bg-white rounded-[2rem] p-8 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.1)] border border-gray-100 hover:shadow-2xl transition-shadow duration-500 flex flex-col">
                        <div class="flex justify-center mb-6">
                            <img src="images/Dep1.jpg" alt="Deposits" class="w-40 h-40 object-cover rounded-2xl shadow-lg aspect-square">
                        </div>
                        <div class="text-center space-y-4 flex-grow">
                            <div class="inline-block px-4 py-1 bg-green-100 text-green-800 font-bold rounded-full text-xs tracking-wide uppercase">High Returns</div>
                            <h2 class="text-2xl font-extrabold text-blue-900">Deposits</h2>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Secure your hard-earned money while making it grow. We provide a variety of deposit schemes designed to offer maximum returns safely over time.
                            </p>
                            <ul class="text-left space-y-2 pt-4 text-gray-700 text-sm font-medium">
                                <li class="flex items-center gap-3"><svg class="w-5 h-5 text-blue-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> Savings Accounts</li>
                                <li class="flex items-center gap-3"><svg class="w-5 h-5 text-blue-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> Fixed Deposits (FD)</li>
                                <li class="flex items-center gap-3"><svg class="w-5 h-5 text-blue-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> Recurring Deposits (RD)</li>
                                <li class="flex items-center gap-3"><svg class="w-5 h-5 text-blue-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> Senior Citizen Benefits</li>
                            </ul>
                        </div>
                        <div class="pt-6 text-center mt-auto">
                            <a href="deposits.php" class="inline-flex items-center gap-2 bg-green-600 text-white font-bold px-6 py-2 rounded-full hover:bg-green-700 transition-colors">
                                Explore Deposits <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Loans & Advances -->
                    <div class="flex-shrink-0 w-[350px] bg-white rounded-[2rem] p-8 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.1)] border border-gray-100 hover:shadow-2xl transition-shadow duration-500 flex flex-col">
                        <div class="flex justify-center mb-6">
                            <img src="images/Dep2.jpg" alt="Loans & Advances" class="w-40 h-40 object-cover rounded-2xl shadow-lg aspect-square">
                        </div>
                        <div class="text-center space-y-4 flex-grow">
                            <div class="inline-block px-4 py-1 bg-blue-100 text-blue-800 font-bold rounded-full text-xs tracking-wide uppercase">Empowering You</div>
                            <h2 class="text-2xl font-extrabold text-blue-900">Loans & Advances</h2>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Whether you are building a home, buying a vehicle, or funding your child's education, our flexible loan products are tailored to turn your dreams into reality.
                            </p>
                            <ul class="text-left space-y-2 pt-4 text-gray-700 text-sm font-medium">
                                <li class="flex items-center gap-3"><svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Agricultural Loans</li>
                                <li class="flex items-center gap-3"><svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Personal & Vehicle Loans</li>
                                <li class="flex items-center gap-3"><svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Business Advances</li>
                                <li class="flex items-center gap-3"><svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Minimal Paperwork</li>
                            </ul>
                        </div>
                        <div class="pt-6 text-center mt-auto">
                            <a href="loans.php" class="inline-flex items-center gap-2 bg-blue-600 text-white font-bold px-6 py-2 rounded-full hover:bg-blue-700 transition-colors">
                                Explore Loans <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Non Banking Services -->
                    <div class="flex-shrink-0 w-[350px] bg-white rounded-[2rem] p-8 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.1)] border border-gray-100 hover:shadow-2xl transition-shadow duration-500 flex flex-col">
                        <div class="flex justify-center mb-6">
                            <img src="images/nonbank.jpg" alt="Non Banking Services" class="w-40 h-40 object-cover rounded-2xl shadow-lg aspect-square">
                        </div>
                        <div class="text-center space-y-4 flex-grow">
                            <div class="inline-block px-4 py-1 bg-purple-100 text-purple-800 font-bold rounded-full text-xs tracking-wide uppercase">Value Added</div>
                            <h2 class="text-2xl font-extrabold text-blue-900">Non Banking Services</h2>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                We go beyond traditional banking. Pay your bills, manage insurance, and handle digital services conveniently under one roof.
                            </p>
                            <ul class="text-left space-y-2 pt-4 text-gray-700 text-sm font-medium">
                                <li class="flex items-center gap-3"><svg class="w-5 h-5 text-blue-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> Utility Bill Payments</li>
                                <li class="flex items-center gap-3"><svg class="w-5 h-5 text-blue-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> Insurance Processing</li>
                                <li class="flex items-center gap-3"><svg class="w-5 h-5 text-blue-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> RTGS / NEFT Transfers</li>
                                <li class="flex items-center gap-3"><svg class="w-5 h-5 text-blue-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> Digital Assistance</li>
                            </ul>
                        </div>
                        <div class="pt-6 text-center mt-auto">
                            <a href="non-banking.php" class="inline-flex items-center gap-2 bg-purple-600 text-white font-bold px-6 py-2 rounded-full hover:bg-purple-700 transition-colors">
                                Explore Services <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </a>
                        </div>
                    </div>

                </div>

                <!-- Track 2 (Duplicate for infinite scroll) -->
                <div class="scroll-track" aria-hidden="true">
                    
                    <!-- Gold Loan -->
                    <div class="flex-shrink-0 w-[350px] bg-white rounded-[2rem] p-8 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.1)] border border-gray-100 hover:shadow-2xl transition-shadow duration-500 flex flex-col">
                        <div class="flex justify-center mb-6">
                            <img src="images/Gold1.jpg" alt="Gold Loan" class="w-40 h-40 object-cover rounded-2xl shadow-lg aspect-square">
                        </div>
                        <div class="text-center space-y-4 flex-grow">
                            <div class="inline-block px-4 py-1 bg-yellow-100 text-yellow-800 font-bold rounded-full text-xs tracking-wide uppercase">Fastest Processing</div>
                            <h2 class="text-2xl font-extrabold text-blue-900">Gold Loan</h2>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Unlock the true value of your gold instantly. We offer the highest per-gram rate in the market with absolute security for your assets and minimal documentation.
                            </p>
                            <ul class="text-left space-y-2 pt-4 text-gray-700 text-sm font-medium">
                                <li class="flex items-center gap-3"><svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Instant Cash Disbursal</li>
                                <li class="flex items-center gap-3"><svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Lowest Interest Rates</li>
                                <li class="flex items-center gap-3"><svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Flexible Repayment</li>
                                <li class="flex items-center gap-3"><svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> 100% Secure Storage</li>
                            </ul>
                        </div>
                        <div class="pt-6 text-center mt-auto">
                            <a href="gold-loan.php" tabindex="-1" class="inline-flex items-center gap-2 bg-yellow-500 text-white font-bold px-6 py-2 rounded-full hover:bg-yellow-600 transition-colors">
                                Explore Gold Loan <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Deposits -->
                    <div class="flex-shrink-0 w-[350px] bg-white rounded-[2rem] p-8 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.1)] border border-gray-100 hover:shadow-2xl transition-shadow duration-500 flex flex-col">
                        <div class="flex justify-center mb-6">
                            <img src="images/Dep1.jpg" alt="Deposits" class="w-40 h-40 object-cover rounded-2xl shadow-lg aspect-square">
                        </div>
                        <div class="text-center space-y-4 flex-grow">
                            <div class="inline-block px-4 py-1 bg-green-100 text-green-800 font-bold rounded-full text-xs tracking-wide uppercase">High Returns</div>
                            <h2 class="text-2xl font-extrabold text-blue-900">Deposits</h2>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Secure your hard-earned money while making it grow. We provide a variety of deposit schemes designed to offer maximum returns safely over time.
                            </p>
                            <ul class="text-left space-y-2 pt-4 text-gray-700 text-sm font-medium">
                                <li class="flex items-center gap-3"><svg class="w-5 h-5 text-blue-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> Savings Accounts</li>
                                <li class="flex items-center gap-3"><svg class="w-5 h-5 text-blue-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> Fixed Deposits (FD)</li>
                                <li class="flex items-center gap-3"><svg class="w-5 h-5 text-blue-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> Recurring Deposits (RD)</li>
                                <li class="flex items-center gap-3"><svg class="w-5 h-5 text-blue-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> Senior Citizen Benefits</li>
                            </ul>
                        </div>
                        <div class="pt-6 text-center mt-auto">
                            <a href="deposits.php" tabindex="-1" class="inline-flex items-center gap-2 bg-green-600 text-white font-bold px-6 py-2 rounded-full hover:bg-green-700 transition-colors">
                                Explore Deposits <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Loans & Advances -->
                    <div class="flex-shrink-0 w-[350px] bg-white rounded-[2rem] p-8 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.1)] border border-gray-100 hover:shadow-2xl transition-shadow duration-500 flex flex-col">
                        <div class="flex justify-center mb-6">
                            <img src="images/Dep2.jpg" alt="Loans & Advances" class="w-40 h-40 object-cover rounded-2xl shadow-lg aspect-square">
                        </div>
                        <div class="text-center space-y-4 flex-grow">
                            <div class="inline-block px-4 py-1 bg-blue-100 text-blue-800 font-bold rounded-full text-xs tracking-wide uppercase">Empowering You</div>
                            <h2 class="text-2xl font-extrabold text-blue-900">Loans & Advances</h2>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Whether you are building a home, buying a vehicle, or funding your child's education, our flexible loan products are tailored to turn your dreams into reality.
                            </p>
                            <ul class="text-left space-y-2 pt-4 text-gray-700 text-sm font-medium">
                                <li class="flex items-center gap-3"><svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Agricultural Loans</li>
                                <li class="flex items-center gap-3"><svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Personal & Vehicle Loans</li>
                                <li class="flex items-center gap-3"><svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Business Advances</li>
                                <li class="flex items-center gap-3"><svg class="w-5 h-5 text-green-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Minimal Paperwork</li>
                            </ul>
                        </div>
                        <div class="pt-6 text-center mt-auto">
                            <a href="loans.php" tabindex="-1" class="inline-flex items-center gap-2 bg-blue-600 text-white font-bold px-6 py-2 rounded-full hover:bg-blue-700 transition-colors">
                                Explore Loans <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Non Banking Services -->
                    <div class="flex-shrink-0 w-[350px] bg-white rounded-[2rem] p-8 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.1)] border border-gray-100 hover:shadow-2xl transition-shadow duration-500 flex flex-col">
                        <div class="flex justify-center mb-6">
                            <img src="images/nonbank.jpg" alt="Non Banking Services" class="w-40 h-40 object-cover rounded-2xl shadow-lg aspect-square">
                        </div>
                        <div class="text-center space-y-4 flex-grow">
                            <div class="inline-block px-4 py-1 bg-purple-100 text-purple-800 font-bold rounded-full text-xs tracking-wide uppercase">Value Added</div>
                            <h2 class="text-2xl font-extrabold text-blue-900">Non Banking Services</h2>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                We go beyond traditional banking. Pay your bills, manage insurance, and handle digital services conveniently under one roof.
                            </p>
                            <ul class="text-left space-y-2 pt-4 text-gray-700 text-sm font-medium">
                                <li class="flex items-center gap-3"><svg class="w-5 h-5 text-blue-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> Utility Bill Payments</li>
                                <li class="flex items-center gap-3"><svg class="w-5 h-5 text-blue-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> Insurance Processing</li>
                                <li class="flex items-center gap-3"><svg class="w-5 h-5 text-blue-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> RTGS / NEFT Transfers</li>
                                <li class="flex items-center gap-3"><svg class="w-5 h-5 text-blue-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> Digital Assistance</li>
                            </ul>
                        </div>
                        <div class="pt-6 text-center mt-auto">
                            <a href="non-banking.php" tabindex="-1" class="inline-flex items-center gap-2 bg-purple-600 text-white font-bold px-6 py-2 rounded-full hover:bg-purple-700 transition-colors">
                                Explore Services <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </a>
                        </div>
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