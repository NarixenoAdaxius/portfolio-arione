<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arione John Dauis - Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>
<body class="bg-gradient-to-br from-gray-50 via-gray-100 to-gray-200 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 min-h-screen">
    <!-- Background Decoration -->
    <div class="fixed inset-0 -z-10 overflow-hidden">
        <div class="absolute -top-1/2 -right-1/2 w-full h-full bg-gradient-to-bl from-blue-500/20 via-purple-500/20 to-pink-500/20 blur-3xl transform rotate-12 dark:from-blue-900/30 dark:via-purple-900/30 dark:to-pink-900/30"></div>
        <div class="absolute -bottom-1/2 -left-1/2 w-full h-full bg-gradient-to-tr from-green-500/20 via-blue-500/20 to-purple-500/20 blur-3xl transform -rotate-12 dark:from-green-900/30 dark:via-blue-900/30 dark:to-purple-900/30"></div>
    </div>

    <!-- Navigation -->
    <nav class="fixed w-full bg-white/80 dark:bg-gray-900/80 backdrop-blur-md z-50 shadow-lg">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <a href="{{ route('home') }}" class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                    AJ<span class="text-gray-800 dark:text-white">Dauis</span>
                </a>
                <div class="hidden md:flex space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Home</a>
                    <a href="{{ route('about') }}" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">About</a>
                    <a href="{{ route('projects') }}" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Projects</a>
                    <a href="{{ route('contact') }}" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Contact</a>
                </div>
                <!-- Mobile Menu Button -->
                <button class="md:hidden text-gray-700 dark:text-gray-300" id="mobile-menu-button">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-16 6h16"></path>
                    </svg>
                </button>
            </div>
            <!-- Mobile Menu -->
            <div class="md:hidden hidden" id="mobile-menu">
                <div class="flex flex-col space-y-4 mt-4 pb-4">
                    <a href="{{ route('home') }}" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Home</a>
                    <a href="{{ route('about') }}" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">About</a>
                    <a href="{{ route('projects') }}" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Projects</a>
                    <a href="{{ route('contact') }}" class="text-gray-700 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-20">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white/80 dark:bg-gray-900/80 backdrop-blur-md mt-20">
        <div class="container mx-auto px-6 py-12">
            <div class="grid md:grid-cols-4 gap-8">
                <div class="space-y-4">
                    <h3 class="text-xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">AJDauis</h3>
                    <p class="text-gray-600 dark:text-gray-400">IT Technical Support Specialist & Web Developer</p>
                </div>
                <div class="space-y-4">
                    <h4 class="text-lg font-semibold text-gray-900 dark:text-white">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" class="text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400">Home</a></li>
                        <li><a href="{{ route('about') }}" class="text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400">About</a></li>
                        <li><a href="{{ route('projects') }}" class="text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400">Projects</a></li>
                    </ul>
                </div>
                <div class="space-y-4">
                    <h4 class="text-lg font-semibold text-gray-900 dark:text-white">Contact</h4>
                    <ul class="space-y-2">
                        <li class="text-gray-600 dark:text-gray-400">Sto. Domingo, Cainta, Rizal</li>
                        <li><a href="mailto:dauis.arione@gmail.com" class="text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400">dauis.arione@gmail.com</a></li>
                    </ul>
                </div>
                <div class="space-y-4">
                    <h4 class="text-lg font-semibold text-gray-900 dark:text-white">Social Media</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400">Facebook</a></li>
                        <li><a href="#" class="text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400">Twitter</a></li>
                        <li><a href="#" class="text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400">Instagram</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-200 dark:border-gray-700 mt-8 pt-8 text-center">
                <p class="text-gray-600 dark:text-gray-400">&copy; {{ date('Y') }} Arione John Dauis. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            once: true
        });

        // Initialize Swiper
        document.addEventListener('DOMContentLoaded', function() {
            if (document.querySelector('.swiper-container')) {
                new Swiper('.swiper-container', {
                    slidesPerView: 1,
                    spaceBetween: 30,
                    loop: true,
                    autoplay: {
                        delay: 5000,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 1,
                        },
                        768: {
                            slidesPerView: 2,
                        },
                        1024: {
                            slidesPerView: 3,
                        },
                    },
                });
            }
        });

        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>
</html>
