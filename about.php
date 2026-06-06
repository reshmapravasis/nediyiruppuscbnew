<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nediyiruppu SCB - Modern Banking</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="tailwind-config.js"></script>
</head>

<body class="bg-gray-50 font-sans text-gray-900">
    <div id="header-placeholder"></div>
    <main>


        <div class="bg-gradient-to-r from-[#0d4d6e] to-[#1d9c8d] py-16 text-center text-white">
            <div class="absolute inset-0 bg-black opacity-20"></div>
            <div class="relative z-10 px-6">
                <h1 class="text-5xl font-bold mb-4">Our Legacy of Trust</h1>
                <p class="text-xl text-blue-200 max-w-2xl mx-auto font-light">
                    Founded on May 14, 1965, Nediyiruppu SCB has been a cornerstone of financial inclusion for over 60
                    years.
                </p>
            </div>
        </div>

        <section class="max-w-6xl mx-auto -mt-12 px-6 grid md:grid-cols-2 gap-8 relative z-20">
            <div class="bg-white p-10 rounded-2xl shadow-xl border-b-4 border-green-500">
                <div class="text-green-600 text-4xl mb-4">🎯</div>
                <h2 class="text-2xl font-bold text-blue-900 mb-4">Our Mission</h2>
                <p class="text-gray-600 leading-relaxed">
                    To provide accessible, transparent, and inclusive financial services that uplift our members and
                    strengthen
                    our community's economic fabric.
                </p>
            </div>
            <div class="bg-white p-10 rounded-2xl shadow-xl border-b-4 border-blue-500">
                <div class="text-blue-600 text-4xl mb-4">👁️</div>
                <h2 class="text-2xl font-bold text-blue-900 mb-4">Our Vision</h2>
                <p class="text-gray-600 leading-relaxed">
                    To be a modern, member-first co-operative bank balancing tradition with innovation for long-term
                    prosperity.
                </p>
            </div>
        </section>

        <section id="about" class="py-16 px-10"><br><br>
            <h2 class="text-3xl font-bold text-center mb-12 text-blue-900">Who are We?</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="rounded-[2rem] overflow-hidden shadow-2xl border-4 border-white ring-1 ring-gray-200">
                    <img src="images/banner5.jpg" class="w-full h-full object-cover">
                </div>
                <div class="space-y-6 text-gray-700 leading-relaxed tracking-wide text-lg">
                    <p>
                        The <strong class="text-blue-900 text-xl">Nediyiruppu Service Co-Operative Bank Ltd.</strong> (D-1934), established on May 14, 1965, is a Class 1 Special Grade Service Co-operative Bank headquartered in Kodangad P.O., Kondotty, Malappuram District, Kerala. Registered under the Kerala Co-operative Societies Act, the bank has been a cornerstone in promoting financial inclusion and cooperative banking in the region.
                    </p>
                    <p>
                        Over the decades, the bank has expanded its services to meet the evolving needs of its members and the community. Our offerings include savings and current accounts, fixed deposits, agricultural and personal loans, and other financial products tailored to support the economic growth of our members.
                    </p>
                    <p>
                        Beyond banking, the Nediyiruppu Service Co-Operative Bank is deeply committed to social responsibility. We actively participate in community development initiatives, such as donating computers to local health centers, thereby enhancing public health infrastructure.
                    </p>
                    <p>
                        Our mission is to provide reliable, member-centric financial services while fostering community development and economic empowerment. We adhere to principles of transparency, integrity, and cooperative values, ensuring that our members' interests are always at the forefront.
                    </p>
                </div>
            </div>
        </section>

        <section class="max-w-6xl mx-auto py-20 px-6">
            <div class="text-center mb-16"><br><br>
                <h2 class="text-3xl font-bold text-blue-900">Board of Directors</h2>
                <p class="text-gray-500 mt-2 italic">The visionaries leading our institution</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12 max-w-4xl mx-auto">

                <div class="text-center group">
                    <div
                        class="relative w-32 h-32 mx-auto mb-4 overflow-hidden rounded-full border-4 border-white shadow-lg ring-2 ring-gray-100 group-hover:ring-green-500 transition-all duration-300">
                        <img src="directors/president.png" alt="President"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">

                        <div
                            class="absolute inset-0 bg-blue-900/80 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 p-2">
                            <p class="text-[10px] text-white uppercase tracking-widest font-bold">President</p>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold text-blue-900">Sri. VPA Sidheeque</h3>
                    <p class="text-sm text-green-600 font-medium">President</p>
                </div>

                <div class="text-center group">
                    <div
                        class="relative w-32 h-32 mx-auto mb-4 overflow-hidden rounded-full border-4 border-white shadow-lg ring-2 ring-gray-100 group-hover:ring-green-500 transition-all duration-300">
                        <img src="directors/shabr.png" alt="Director"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">

                        <div
                            class="absolute inset-0 bg-blue-900/80 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 p-2">
                            <p class="text-[10px] text-white uppercase tracking-widest font-bold">Director</p>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold text-blue-900">Sri. Shabeerali.C.P</h3>
                    <p class="text-sm text-green-600 font-medium">Vice President</p>
                </div>

                <div class="text-center group">
                    <div
                        class="relative w-32 h-32 mx-auto mb-4 overflow-hidden rounded-full border-4 border-white shadow-lg ring-2 ring-gray-100 group-hover:ring-green-500 transition-all duration-300">
                        <img src="directors/Suhair.png" alt="Secretary"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">

                        <div
                            class="absolute inset-0 bg-blue-900/80 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 p-2">
                            <p class="text-[10px] text-white uppercase tracking-widest font-bold">Vice President</p>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold text-blue-900">Sri. Suhairudheen.C</h3>
                    <p class="text-sm text-green-600 font-medium">Secretary</p>
                </div>

                <div class="text-center group">
                    <div
                        class="relative w-32 h-32 mx-auto mb-4 overflow-hidden rounded-full border-4 border-white shadow-lg ring-2 ring-gray-100 group-hover:ring-green-500 transition-all duration-300">
                        <img src="directors/abdu.png" alt="Secretary"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">

                        <div
                            class="absolute inset-0 bg-blue-900/80 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 p-2">
                            <p class="text-[10px] text-white uppercase tracking-widest font-bold">Director</p>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold text-blue-900">Sri. Abdurazaque.P.P</h3>
                    <p class="text-sm text-green-600 font-medium">Director</p>
                </div>

                <div class="text-center group">
                    <div
                        class="relative w-32 h-32 mx-auto mb-4 overflow-hidden rounded-full border-4 border-white shadow-lg ring-2 ring-gray-100 group-hover:ring-green-500 transition-all duration-300">
                        <img src="directors/ahamd.png" alt="Secretary"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">

                        <div
                            class="absolute inset-0 bg-blue-900/80 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 p-2">
                            <p class="text-[10px] text-white uppercase tracking-widest font-bold">Director</p>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold text-blue-900">Sri. Ahammed Ibrahim Basheer.T.P</h3>
                    <p class="text-sm text-green-600 font-medium">Director</p>
                </div>

                <div class="text-center group">
                    <div
                        class="relative w-32 h-32 mx-auto mb-4 overflow-hidden rounded-full border-4 border-white shadow-lg ring-2 ring-gray-100 group-hover:ring-green-500 transition-all duration-300">
                        <img src="directors/alavi.png" alt="Secretary"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">

                        <div
                            class="absolute inset-0 bg-blue-900/80 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 p-2">
                            <p class="text-[10px] text-white uppercase tracking-widest font-bold">Director</p>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold text-blue-900">Sri. Alavi.K.K</h3>
                    <p class="text-sm text-green-600 font-medium">Director</p>
                </div>

                <div class="text-center group">
                    <div
                        class="relative w-32 h-32 mx-auto mb-4 overflow-hidden rounded-full border-4 border-white shadow-lg ring-2 ring-gray-100 group-hover:ring-green-500 transition-all duration-300">
                        <img src="directors/faizal.png" alt="Secretary"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">

                        <div
                            class="absolute inset-0 bg-blue-900/80 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 p-2">
                            <p class="text-[10px] text-white uppercase tracking-widest font-bold">Director</p>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold text-blue-900">Sri. Faizal.K.K</h3>
                    <p class="text-sm text-green-600 font-medium">Director</p>
                </div>

                <div class="text-center group">
                    <div
                        class="relative w-32 h-32 mx-auto mb-4 overflow-hidden rounded-full border-4 border-white shadow-lg ring-2 ring-gray-100 group-hover:ring-green-500 transition-all duration-300">
                        <img src="directors/fbabu.png" alt="Secretary"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">

                        <div
                            class="absolute inset-0 bg-blue-900/80 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 p-2">
                            <p class="text-[10px] text-white uppercase tracking-widest font-bold">Director</p>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold text-blue-900">Sri. Faizal Babu.A</h3>
                    <p class="text-sm text-green-600 font-medium">Director</p>
                </div>

                <div class="text-center group">
                    <div
                        class="relative w-32 h-32 mx-auto mb-4 overflow-hidden rounded-full border-4 border-white shadow-lg ring-2 ring-gray-100 group-hover:ring-green-500 transition-all duration-300">
                        <img src="directors/askar.png" alt="Secretary"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">

                        <div
                            class="absolute inset-0 bg-blue-900/80 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 p-2">
                            <p class="text-[10px] text-white uppercase tracking-widest font-bold">Director</p>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold text-blue-900">Sri. Muhammed Ali Askar.A</h3>
                    <p class="text-sm text-green-600 font-medium">Director</p>
                </div>

                <div class="text-center group">
                    <div
                        class="relative w-32 h-32 mx-auto mb-4 overflow-hidden rounded-full border-4 border-white shadow-lg ring-2 ring-gray-100 group-hover:ring-green-500 transition-all duration-300">
                        <img src="directors/ramesh.png" alt="Secretary"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">

                        <div
                            class="absolute inset-0 bg-blue-900/80 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 p-2">
                            <p class="text-[10px] text-white uppercase tracking-widest font-bold">Director</p>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold text-blue-900">Sri. Ramesh Veluthon</h3>
                    <p class="text-sm text-green-600 font-medium">Director</p>
                </div>


                <div class="text-center group">
                    <div
                        class="relative w-32 h-32 mx-auto mb-4 overflow-hidden rounded-full border-4 border-white shadow-lg ring-2 ring-gray-100 group-hover:ring-green-500 transition-all duration-300">
                        <img src="directors/hasna.png" alt="Secretary"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">

                        <div
                            class="absolute inset-0 bg-blue-900/80 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 p-2">
                            <p class="text-[10px] text-white uppercase tracking-widest font-bold">Director</p>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold text-blue-900">Smt. Haseena.N</h3>
                    <p class="text-sm text-green-600 font-medium">Director</p>
                </div>

                <div class="text-center group">
                    <div
                        class="relative w-32 h-32 mx-auto mb-4 overflow-hidden rounded-full border-4 border-white shadow-lg ring-2 ring-gray-100 group-hover:ring-green-500 transition-all duration-300">
                        <img src="directors/rashida.png" alt="Secretary"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">

                        <div
                            class="absolute inset-0 bg-blue-900/80 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 p-2">
                            <p class="text-[10px] text-white uppercase tracking-widest font-bold">Director</p>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold text-blue-900">Smt. Rashida.M.K</h3>
                    <p class="text-sm text-green-600 font-medium">Director</p>
                </div>

                <div class="text-center group">
                    <div
                        class="relative w-32 h-32 mx-auto mb-4 overflow-hidden rounded-full border-4 border-white shadow-lg ring-2 ring-gray-100 group-hover:ring-green-500 transition-all duration-300">
                        <img src="directors/shahar.png" alt="Secretary"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">

                        <div
                            class="absolute inset-0 bg-blue-900/80 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 p-2">
                            <p class="text-[10px] text-white uppercase tracking-widest font-bold">Director</p>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold text-blue-900">Smt. Shaharban.K</h3>
                    <p class="text-sm text-green-600 font-medium">Director</p>
                </div>

                <div class="text-center group">
                    <div
                        class="relative w-32 h-32 mx-auto mb-4 overflow-hidden rounded-full border-4 border-white shadow-lg ring-2 ring-gray-100 group-hover:ring-green-500 transition-all duration-300">
                        <img src="directors/" alt="Secretary"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">

                        <div
                            class="absolute inset-0 bg-blue-900/80 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 p-2">
                            <p class="text-[10px] text-white uppercase tracking-widest font-bold">Director</p>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold text-blue-900">Sri. Hamza</h3>
                    <p class="text-sm text-green-600 font-medium">Director</p>
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