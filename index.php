<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nediyiruppu SCB</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 font-sans text-gray-900">

    <div id="header-placeholder"></div>

    <main>
        <section class="relative h-[500px] overflow-hidden">
            <div id="slider" class="relative h-full w-full">
                <div class="slide absolute inset-0 transition-opacity duration-1000 opacity-100">
                    <img src="images/banner1.png" class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 bg-blue-900/60 flex items-center justify-center text-center text-white px-10">
                        <div>
                            <h1 class="text-4xl md:text-6xl font-extrabold mb-4">Empowering the Community</h1>
                            <p class="text-lg opacity-90 max-w-2xl mx-auto">Providing trusted financial services since
                                1965.</p>
                        </div>
                    </div>
                </div>
                <div class="slide absolute inset-0 transition-opacity duration-1000 opacity-0">
                    <img src="images/banner2.png" class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 bg-blue-800/60 flex items-center justify-center text-center text-white px-10">
                        <div>
                            <h1 class="text-4xl md:text-6xl font-extrabold mb-4">Secure Gold Loans</h1>
                            <p class="text-lg opacity-90 max-w-2xl mx-auto">Get instant cash with the lowest interest
                                rates.</p>
                        </div>
                    </div>
                </div>
                <div class="slide absolute inset-0 transition-opacity duration-1000 opacity-0">
                    <img src="images/banner3.jpg" class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 bg-blue-900/70 flex items-center justify-center text-center text-white px-10">
                        <div>
                            <h1 class="text-4xl md:text-6xl font-extrabold mb-4">Modern Savings</h1>
                            <p class="text-lg opacity-90 max-w-2xl mx-auto">Grow your wealth with our Fixed & Recurring
                                Deposits.</p>
                        </div>
                    </div>
                </div>
                <div class="slide absolute inset-0 transition-opacity duration-1000 opacity-0">
                    <img src="images/banner4.jpg" class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 bg-blue-800/60 flex items-center justify-center text-center text-white px-10">
                        <div>
                            <h1 class="text-4xl md:text-6xl font-extrabold mb-4">Agricultural Support</h1>
                            <p class="text-lg opacity-90 max-w-2xl mx-auto">Empowering local farmers with specialized
                                loan products.</p>
                        </div>
                    </div>
                </div>
                <div class="slide absolute inset-0 transition-opacity duration-1000 opacity-0">
                    <img src="images/banner5.jpg" class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 bg-blue-900/60 flex items-center justify-center text-center text-white px-10">
                        <div>
                            <h1 class="text-4xl md:text-6xl font-extrabold mb-4">Digital Banking</h1>
                            <p class="text-lg opacity-90 max-w-2xl mx-auto">Experience seamless banking with our portal
                                login.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="bg-yellow-50 border-y border-yellow-200 py-3 flex items-center">
            <div class="bg-red-600 text-white px-4 py-1 text-xs font-bold rounded-r-lg z-10">LATEST NEWS</div>
            <marquee id="news-marquee" class="text-blue-900 font-medium text-sm" scrollamount="6">
                Loading news...
            </marquee>
        </div>

        <section id="about" class="py-16 px-10">
            <h2 class="text-3xl font-bold text-center mb-12">Who are We?</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="rounded-[2rem] overflow-hidden shadow-2xl">
                    <img src="images/banner3.jpg" class="w-full h-full object-cover">
                </div>
                <div>
                    <span style="color:#0d4d6e; font-size:1.2em; font-weight:bold;">Nediyiruppu Service Co-Operative
                        Bank Ltd. (D-1934),</span>
                    <p class="text-gray-600 mb-4">established on May 14, 1965, is a Class 1 Special Grade Service
                        Co-operative Bank headquartered in Kodangad P.O., Kondotty, Malappuram District, Kerala.
                        Registered under the Kerala Co-operative Societies Act...</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12 max-w-4xl mx-auto">
                <div class="text-center group">
                    <div
                        class="relative w-32 h-32 mx-auto mb-4 overflow-hidden rounded-full border-4 border-white shadow-lg ring-2 ring-gray-100 group-hover:ring-green-500 transition-all duration-300">
                        <img src="directors/president.png" alt="President"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <h3 class="text-lg font-bold text-blue-900">Sri. VPA Sidheeque</h3>
                    <p class="text-sm text-green-600 font-medium">President</p>
                </div>
                <div class="text-center group">
                    <div
                        class="relative w-32 h-32 mx-auto mb-4 overflow-hidden rounded-full border-4 border-white shadow-lg ring-2 ring-gray-100 group-hover:ring-green-500 transition-all duration-300">
                        <img src="directors/shabr.png" alt="Vice President"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <h3 class="text-lg font-bold text-blue-900">Sri. Shabeerali.C.P</h3>
                    <p class="text-sm text-green-600 font-medium">Vice President</p>
                </div>
                <div class="text-center group">
                    <div
                        class="relative w-32 h-32 mx-auto mb-4 overflow-hidden rounded-full border-4 border-white shadow-lg ring-2 ring-gray-100 group-hover:ring-green-500 transition-all duration-300">
                        <img src="directors/Suhair.png" alt="Secretary"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <h3 class="text-lg font-bold text-blue-900">Sri. Suhairudheen.C</h3>
                    <p class="text-sm text-green-600 font-medium">Secretary</p>
                </div>
            </div>
            <div class="text-center mt-12">
                <a href="about.php"
                    class="inline-flex items-center bg-blue-900 text-white px-8 py-3 rounded-full font-bold hover:bg-green-700 transition-colors shadow-lg">Read
                    More About Our Team</a>
            </div>
        </section>

        <section class="bg-gray-900 py-16 text-white overflow-hidden">
            <div class="max-w-6xl mx-auto px-6">
                <div class="grid grid-cols-2 md:grid-cols-5 gap-8 text-center">
                    <div class="space-y-2 border-r border-gray-700 last:border-0">
                        <h2 class="text-4xl md:text-5xl font-extrabold text-white"><span class="counter"
                                data-target="1500">0</span>+</h2>
                        <p class="text-sm font-semibold uppercase tracking-wider text-gray-400">A Class Member</p>
                    </div>
                    <div class="space-y-2 border-r border-gray-700 last:border-0">
                        <h2 class="text-4xl md:text-5xl font-extrabold text-white"><span class="counter"
                                data-target="250">0</span>+</h2>
                        <p class="text-sm font-semibold uppercase tracking-wider text-gray-400">C Class Member</p>
                    </div>
                    <div class="space-y-2 border-r border-gray-700 last:border-0">
                        <h2 class="text-4xl md:text-5xl font-extrabold text-white"><span class="counter"
                                data-target="50">0</span>+</h2>
                        <p class="text-sm font-semibold uppercase tracking-wider text-gray-400">D Class Member</p>
                    </div>
                    <div class="space-y-2 border-r border-gray-700 last:border-0">
                        <h2 class="text-4xl md:text-5xl font-extrabold text-white"><span class="counter"
                                data-target="50">0</span> Cr+</h2>
                        <p class="text-sm font-semibold uppercase tracking-wider text-gray-400">Deposits</p>
                    </div>
                    <div class="space-y-2">
                        <h2 class="text-4xl md:text-5xl font-extrabold text-white"><span class="counter"
                                data-target="50">0</span> Cr+</h2>
                        <p class="text-sm font-semibold uppercase tracking-wider text-gray-400">Loans</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="services" class="py-16 px-10">
            <h2 class="text-3xl font-bold text-center mb-12">Our Financial Products</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div
                    class="bg-white p-8 rounded-xl shadow-sm hover:shadow-xl transition text-center border-b-4 border-green-500">
                    <div class="text-4xl mb-4">💰</div>
                    <h3 class="text-xl font-bold mb-2">Deposits</h3>
                    <p class="text-gray-600 mb-4">Secure your future with our various saving schemes.</p>
                </div>
                <div
                    class="bg-white p-8 rounded-xl shadow-sm hover:shadow-xl transition text-center border-b-4 border-blue-500">
                    <div class="text-4xl mb-4">🏠</div>
                    <h3 class="text-xl font-bold mb-2">Loans & Advances</h3>
                    <p class="text-gray-600 mb-4">Easy processing and low interest rates for your dreams.</p>
                </div>
                <div
                    class="bg-white p-8 rounded-xl shadow-sm hover:shadow-xl transition text-center border-b-4 border-yellow-500">
                    <div class="text-4xl mb-4">✨</div>
                    <h3 class="text-xl font-bold mb-2">Gold Loan</h3>
                    <h4 class="text-green-600 font-bold">Instant Cash</h4>
                    <p class="text-gray-600 mb-4">Highest per-gram rate with minimum documentation.</p>
                </div>
            </div>
        </section>
    </main>
    <div id="footer-placeholder"></div>

    <script>
        // Slideshow Logic
        let currentSlide = 0;
        const slides = document.querySelectorAll(".slide");
        function showNextSlide() {
            slides[currentSlide].classList.replace("opacity-100", "opacity-0");
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].classList.replace("opacity-0", "opacity-100");
        }
        setInterval(showNextSlide, 5000);

        // Counter Logic
        const counters = document.querySelectorAll('.counter');
        const speed = 200;
        const startCounters = () => {
            counters.forEach(counter => {
                const updateCount = () => {
                    const target = +counter.getAttribute('data-target');
                    const count = +counter.innerText;
                    const inc = target / speed;
                    if (count < target) {
                        counter.innerText = Math.ceil(count + inc);
                        setTimeout(updateCount, 15);
                    } else { counter.innerText = target; }
                };
                updateCount();
            });
        };
        const observer = new IntersectionObserver((entries) => {
            if (entries[0].isIntersecting) { startCounters(); observer.disconnect(); }
        }, { threshold: 0.5 });
        observer.observe(document.querySelector('.counter').parentElement.parentElement.parentElement);

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

        // Load News Logic
        fetch('data/news.json')
            .then(response => response.json())
            .then(data => {
                const marquee = document.getElementById('news-marquee');
                if (data.length > 0) {
                    const content = data.map(item => {
                        if (typeof item === 'string') {
                            return item;
                        } else {
                            let html = `<span>${item.text}</span>`;
                            if (item.image) {
                                html = `<img src="${item.image}" class="h-6 w-auto inline-block mx-2 align-middle border border-gray-300 rounded-sm"> ` + html;
                            }
                            return `<div class="inline-flex items-center">${html}</div>`;
                        }
                    }).join(" &nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp; ");
                    marquee.innerHTML = content;
                } else {
                    marquee.innerHTML = "Welcome to Nediyiruppu Service Co-Operative Bank";
                }
            })
            .catch(error => console.error('Error loading news:', error));
    </script>
</body>

</html>