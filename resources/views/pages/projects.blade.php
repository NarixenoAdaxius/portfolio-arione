@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6">
    <!-- Projects Header -->
    <section class="py-20">
        <div class="text-center max-w-3xl mx-auto" data-aos="fade-up">
            <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-6">My Projects</h1>
            <p class="text-lg text-gray-600 dark:text-gray-400">
                Here are some of the projects I've worked on. Each project represents a unique challenge and solution in web development and technical support.
            </p>
        </div>
    </section>

    <!-- Projects Grid -->
    <section class="py-10">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Project 1: ShuttleTrack -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden" data-aos="fade-up">
                <div class="relative">
                    <img src="{{ asset('images/projects/shuttletrack.jpg') }}" alt="ShuttleTrack Project" class="w-full h-48 object-cover">
                    <div class="absolute top-0 right-0 bg-blue-600 text-white px-3 py-1 m-2 rounded-full text-sm">
                        Featured
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">ShuttleTrack</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        A transportation tracking system utilizing LoRaWAN Technology and Mobile Technology. Real-time tracking and monitoring of shuttle locations.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm">Laravel</span>
                        <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm">LoRaWAN</span>
                        <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm">Mobile Dev</span>
                    </div>
                    <a href="#" class="text-blue-600 hover:text-blue-700 font-medium inline-flex items-center">
                        Learn More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </div>
            </div>

            <!-- Project 2: Event Management System -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                <div class="relative">
                    <img src="{{ asset('images/projects/events.jpg') }}" alt="Event Management System" class="w-full h-48 object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Event Management System</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        Automated event ticketing and email notification system. Handles event registration, ticket generation, and attendee management.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm">PHP</span>
                        <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm">MySQL</span>
                        <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm">JavaScript</span>
                    </div>
                    <a href="#" class="text-blue-600 hover:text-blue-700 font-medium inline-flex items-center">
                        Learn More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </div>
            </div>

            <!-- Project 3: IT Support Dashboard -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                <div class="relative">
                    <img src="{{ asset('images/projects/dashboard.jpg') }}" alt="IT Support Dashboard" class="w-full h-48 object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">IT Support Dashboard</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        Comprehensive IT support ticket management system with real-time status updates and analytics reporting.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm">React</span>
                        <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm">Node.js</span>
                        <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm">MongoDB</span>
                    </div>
                    <a href="#" class="text-blue-600 hover:text-blue-700 font-medium inline-flex items-center">
                        Learn More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </div>
            </div>

            <!-- Project 4: Hardware Inventory System -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden" data-aos="fade-up">
                <div class="relative">
                    <img src="{{ asset('images/projects/inventory.jpg') }}" alt="Hardware Inventory System" class="w-full h-48 object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Hardware Inventory System</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        Digital system for tracking IT hardware assets, maintenance schedules, and equipment assignments.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm">Laravel</span>
                        <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm">Vue.js</span>
                        <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm">PostgreSQL</span>
                    </div>
                    <a href="#" class="text-blue-600 hover:text-blue-700 font-medium inline-flex items-center">
                        Learn More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </div>
            </div>

            <!-- Project 5: Network Monitoring Tool -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                <div class="relative">
                    <img src="{{ asset('images/projects/network.jpg') }}" alt="Network Monitoring Tool" class="w-full h-48 object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Network Monitoring Tool</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        Real-time network performance monitoring and alerting system for IT infrastructure management.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm">Python</span>
                        <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm">Flask</span>
                        <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm">InfluxDB</span>
                    </div>
                    <a href="#" class="text-blue-600 hover:text-blue-700 font-medium inline-flex items-center">
                        Learn More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </div>
            </div>

            <!-- Project 6: Remote Support Portal -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                <div class="relative">
                    <img src="{{ asset('images/projects/support.jpg') }}" alt="Remote Support Portal" class="w-full h-48 object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Remote Support Portal</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        Web-based remote support platform with screen sharing, chat, and remote system diagnostics capabilities.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm">WebRTC</span>
                        <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm">Node.js</span>
                        <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm">Socket.io</span>
                    </div>
                    <a href="#" class="text-blue-600 hover:text-blue-700 font-medium inline-flex items-center">
                        Learn More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20">
        <div class="bg-blue-600 dark:bg-blue-700 rounded-lg p-8 text-center" data-aos="fade-up">
            <h2 class="text-2xl font-bold text-white mb-4">Interested in collaborating?</h2>
            <p class="text-blue-100 mb-6">I'm always open to discussing new projects and opportunities.</p>
            <a href="{{ route('contact') }}" class="inline-block bg-white text-blue-600 px-6 py-3 rounded-lg font-medium hover:bg-blue-50 transition-colors">
                Get in Touch
            </a>
        </div>
    </section>
</div>
@endsection
