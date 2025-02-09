<!DOCTYPE html>
<html lang="lt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OroGita - Patikimi sunkvežimių sprendimai</title>
        <!-- Tailwind CSS CDN -->
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <!-- Font Awesome Icons -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <script>
            // JavaScript, skirtas perjungti mobilųjį meniu
            function toggleMenu() {
                const menu = document.getElementById('navbar-menu');
                menu.classList.toggle('hidden');
            }
        </script>
    </head>
<body class="font-sans bg-gray-100">
    <style>
        #navbar-menu {
            transition: opacity 0.3s ease, transform 0.3s ease;
        }
        #navbar-menu.hidden {
            opacity: 0;
            transform: translateY(-10px);
            pointer-events: none;
        }
    </style>
    <!-- Navigacija -->
    <nav class="bg-blue-900 p-6 fixed w-full top-0 z-50">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-white text-2xl font-bold">OroGita</a>
            <!-- Hamburger meniu piktograma (tik mobiliesiems) -->
            <button class="text-white lg:hidden focus:outline-none" onclick="toggleMenu()">
                <i class="fas fa-bars text-2xl"></i>
            </button>
            <!-- Navigacijos nuorodos -->
            <ul id="navbar-menu" class="hidden lg:flex space-x-6">
                <li><a href="#home" class="text-white hover:text-blue-300">Pradžia</a></li>
                <li><a href="#about-us" class="text-white hover:text-blue-300">Apie mus</a></li>
                <li><a href="#services" class="text-white hover:text-blue-300">Paslaugos</a></li>
                <li><a href="#contact" class="text-white hover:text-blue-300">Kontaktai</a></li>
            </ul>
            <!-- Mobilus meniu (numatytai paslėptas) -->
            <ul id="mobile-menu" class="lg:hidden absolute top-0 right-0 w-2/3 bg-blue-900 text-white p-6 mt-20 space-y-4 hidden">
                <li><a href="#home" class="text-white hover:text-blue-300">Pradžia</a></li>
                <li><a href="#about-us" class="text-white hover:text-blue-300">Apie mus</a></li>
                <li><a href="#services" class="text-white hover:text-blue-300">Paslaugos</a></li>
                <li><a href="#contact" class="text-white hover:text-blue-300">Kontaktai</a></li>
            </ul>
        </div>
    </nav>
    
    <script>
        // JavaScript, skirtas perjungti mobilųjį meniu
        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
    </script>

    <!-- Hero skyrius -->
    <section id="home" class="relative py-32 bg-cover bg-center" style="background-image: url('truck.jpg');">
        <div class="absolute inset-0 bg-black bg-opacity-60"></div>
        <div class="container mx-auto text-center relative z-10">
            <h1 class="text-5xl font-extrabold mb-4 text-white">Jūsų patikimas sunkvežimių partneris</h1>
            <p class="text-xl mb-8 text-white">Teikiame paslaugas laiku ir be išimties.</p>
            <a href="#about-us" class="bg-orange-500 text-white px-8 py-3 rounded-full hover:bg-orange-600 transition-transform transform hover:scale-105">Sužinokite daugiau</a>
        </div>
    </section>

    <!-- Apie mus skyrius -->
    <section id="about-us" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold mb-6">Apie mus</h2>
                    <p class="text-gray-700 mb-6">„OroGita“ siekia teikti aukščiausios kokybės sunkvežimių ir logistikos paslaugas, užtikrinant, kad jūsų prekės būtų pristatytos efektyviai ir laiku. Įkurta logistikos ekspertų komandos, mes tapome patikimu partneriu įmonėms įvairiose pramonės šakose.</p>
                    <p class="text-gray-700 mb-6">Mūsų gerai prižiūrimi sunkvežimiai ir patyrę vairuotojai bei logistikos koordinatoriai užtikrina, kad atitiktume kiekvieno kliento poreikius.</p>
                    <a href="#services" class="bg-blue-900 text-white px-6 py-2 rounded-full hover:bg-blue-800 transition ease-in-out duration-300">Ištirti paslaugas</a>
                </div>
                <div>
                    <img src="trucker.jpg" alt="Apie mus" class="w-full h-auto max-w-md rounded-lg shadow-lg mx-auto">
                </div>
            </div>
        </div>
    </section>

    <!-- Paslaugos skyrius -->
    <section id="services" class="py-16 bg-gray-50">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-12">Teikiamos paslaugos</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 px-4">
                <!-- Paslauga 1 -->
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <i class="fas fa-truck text-4xl text-blue-900 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Krovinių gabenimas</h3>
                    <p class="text-gray-700">Patikimos ir efektyvios krovinių gabenimo paslaugos, pritaikytos jūsų verslo poreikiams.</p>
                </div>
                <!-- Paslauga 2 -->
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <i class="fas fa-route text-4xl text-blue-900 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Logistikos sprendimai</h3>
                    <p class="text-gray-700">Pritaikyti logistikos planai, optimizuojantys išlaidas, efektyvumą ir laiką jūsų verslui.</p>
                </div>
                <!-- Paslauga 3 -->
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <i class="fas fa-warehouse text-4xl text-blue-900 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Sandėliavimas</h3>
                    <p class="text-gray-700">Saugūs, skalaujami ir efektyvūs sandėliavimo sprendimai jūsų saugojimo poreikiams.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Atsiliepimų skyrius -->
    <section class="bg-gray-200 py-16">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12">Ką sako mūsų klientai</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 px-4">
                <!-- Atsiliepimas 1 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="flex items-center mb-4">
                        <img src="https://via.placeholder.com/50" alt="John Doe" class="w-12 h-12 rounded-full mr-4">
                        <p class="text-gray-900 font-bold">John Doe, ABC Company</p>
                    </div>
                    <p class="text-gray-700">"„OroGita“ buvo patikimas partneris mūsų siuntimo poreikiams. Labai rekomenduojame!"</p>
                </div>
                <!-- Atsiliepimas 2 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="flex items-center mb-4">
                        <img src="https://via.placeholder.com/50" alt="Jane Smith" class="w-12 h-12 rounded-full mr-4">
                        <p class="text-gray-900 font-bold">Jane Smith, XYZ Inc.</p>
                    </div>
                    <p class="text-gray-700">"Jų logistikos sprendimai sutaupė mums laiko ir pinigų. Puiki paslauga!"</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Kontaktų skyrius -->
    <section id="contact" class="py-16 bg-white">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12">Susisiekite su mumis</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 px-4">
                <!-- Kontaktų forma -->
                <form class="bg-gray-50 p-6 rounded-lg shadow-lg">
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700">Vardas</label>
                        <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Įveskite savo vardą">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">El. paštas</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Įveskite savo el. paštą">
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-gray-700">Žinutė</label>
                        <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Jūsų žinutė"></textarea>
                    </div>
                    <button type="submit" class="bg-blue-900 text-white px-6 py-2 rounded-full hover:bg-blue-800 transition ease-in-out duration-300">Siųsti žinutę</button>
                </form>
                <!-- Žemėlapis -->
                <div class="rounded-lg overflow-hidden shadow-lg">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2235.055471201621!2d23.306222011871533!3d55.9310762730387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e5e31c90d28bef%3A0xe996b1c129737792!2sDvaro%20g.%2041%2C%20%C5%A0iauliai%2C%2076345%20%C5%A0iauli%C5%B3%20m.%20sav.!5e0!3m2!1sen!2slt!4v1738959448539!5m2!1sen!2slt" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  
                </div>
            </div>
        </div>
    </section>

    <!-- Porašas -->
    <footer class="bg-blue-900 text-white py-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2023 OroGita. Visos teisės saugomos.</p>
            <div class="mt-4">
                <a href="#" class="text-white hover:text-blue-300 mx-2">Privatumo politika</a>
                <a href="#" class="text-white hover:text-blue-300 mx-2">Paslaugų teikimo sąlygos</a>
            </div>
            <div class="mt-4">
                <a href="#" class="text-white hover:text-blue-300 mx-2"><i class="fab fa-facebook"></i></a>
                <a href="#" class="text-white hover:text-blue-300 mx-2"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-white hover:text-blue-300 mx-2"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </footer>

</body>
</html>
