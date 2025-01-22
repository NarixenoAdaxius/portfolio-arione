@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6">
    <!-- Hero Section -->
    <section class="min-h-screen flex items-center">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="space-y-6" data-aos="fade-right">
                <h1 class="text-4xl md:text-6xl font-bold text-gray-900 dark:text-white">
                    Hi, I'm <span class="text-blue-600 dark:text-blue-400">Arione John</span>
                </h1>
                <h2 class="text-2xl md:text-3xl text-gray-700 dark:text-gray-300">
                    IT Technical Support Specialist & Web Developer
                </h2>
                <p class="text-gray-600 dark:text-gray-400 text-lg">
                    Freelance IT Technical Support professional with over four years of experience resolving hardware and software issues, optimizing systems, and providing top-tier customer service.
                </p>
                <div class="flex space-x-4">
                    <a href="{{ route('contact') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg transition-colors">
                        Contact Me
                    </a>
                    <a href="{{ route('projects') }}" class="border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white px-6 py-3 rounded-lg transition-colors">
                        View Projects
                    </a>
                </div>
            </div>
            <div class="relative" data-aos="fade-left">
                <div class="w-64 h-64 mx-auto overflow-hidden rounded-full border-4 border-blue-600">
                    <img src="{{ asset('images/profile.png') }}" alt="Arione John Dauis" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>
    
   <!-- Project Showcase Slider -->
   <section class="py-20 bg-gray-50 dark:bg-gray-800">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12 text-gray-900 dark:text-white" data-aos="fade-up">Featured Projects</h2>
        
        <div class="swiper-container" data-aos="fade-up">
            <div class="swiper-wrapper">
                @foreach($featuredProjects as $project)
                    <div class="swiper-slide">
                        <div class="bg-white dark:bg-gray-900 rounded-lg shadow-lg overflow-hidden h-full">
                            <div class="relative">
                                <img src="{{ asset('images/projects/' . $project['image']) }}" 
                                     alt="{{ $project['title'] }}" 
                                     class="w-full h-48 object-cover">
                                @if($project['featured'])
                                    <div class="absolute top-0 right-0 bg-blue-600 text-white px-3 py-1 m-2 rounded-full text-sm">
                                        Featured
                                    </div>
                                @endif
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">{{ $project['title'] }}</h3>
                                <p class="text-gray-600 dark:text-gray-400 mb-4">{{ $project['short_description'] }}</p>
                                <div class="flex flex-wrap gap-2 mb-4">
                                    @foreach($project['technologies'] as $tech)
                                        <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm">{{ $tech }}</span>
                                    @endforeach
                                </div>
                                <a href="{{ route('projects.show', $project['id']) }}" 
                                   class="text-blue-600 hover:text-blue-700 font-medium inline-flex items-center">
                                    View Project
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>

    <!-- Skills Section -->
    <section class="py-20">
        <h2 class="text-3xl font-bold text-center mb-12 text-gray-900 dark:text-white" data-aos="fade-up">Skills & Expertise</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Technical Support -->
            <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">Technical Support</h3>
                <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                    <li>• Remote Desktop Support</li>
                    <li>• Hardware Troubleshooting</li>
                    <li>• System Performance Optimization</li>
                    <li>• Network Administration</li>
                </ul>
            </div>
            <!-- Web Development -->
            <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">Web Development</h3>
                <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                    <li>• HTML/CSS/JavaScript</li>
                    <li>• PHP & Laravel</li>
                    <li>• Node.js</li>
                    <li>• Database Management</li>
                </ul>
            </div>
            <!-- Software & Tools -->
            <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="300">
                <h3 class="text-xl font-semibold mb-4 text-gray-900 dark:text-white">Software & Tools</h3>
                <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                    <li>• Microsoft Office Suite</li>
                    <li>• Command Line Tools</li>
                    <li>• Windows/Linux Systems</li>
                    <li>• Version Control (Git)</li>
                </ul>
            </div>
        </div>
    </section>
</div>
@endsection
