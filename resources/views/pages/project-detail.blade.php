@extends('layouts.app')

@section('content')
<div class="relative">
    <!-- Hero Banner -->
    <div class="relative h-[50vh] min-h-[400px] w-full overflow-hidden">
        <!-- Banner Image -->
        <div class="absolute inset-0">
            <img src="{{ asset('images/projects/' . $project['banner_image']) }}" 
                 alt="{{ $project['title'] }}" 
                 class="w-full h-full object-cover">
            <!-- Gradient Overlay -->
            <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/70 to-transparent"></div>
        </div>
        
        <!-- Project Title & Quick Info -->
        <div class="absolute bottom-0 left-0 right-0 p-8">
            <div class="container mx-auto">
                <div class="max-w-4xl">
                    <h1 class="text-4xl md:text-5xl font-bold text-white mb-4" data-aos="fade-up">
                        {{ $project['title'] }}
                    </h1>
                    <div class="flex flex-wrap gap-4 items-center text-gray-300" data-aos="fade-up" data-aos-delay="100">
                        <span class="px-3 py-1 bg-blue-600/20 rounded-full border border-blue-500/30 text-blue-400">
                            {{ $project['category'] }}
                        </span>
                        <span class="flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 2a8 8 0 100 16 8 8 0 000-16zm0 14a6 6 0 110-12 6 6 0 010 12z"></path>
                                <path d="M10 4a1 1 0 00-1 1v4a1 1 0 00.293.707l2.5 2.5a1 1 0 001.414-1.414L11 8.586V5a1 1 0 00-1-1z"></path>
                            </svg>
                            {{ $project['completion_date'] }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-6 py-12">
        <div class="grid lg:grid-cols-3 gap-12">
            <!-- Left Column - Main Content -->
            <div class="lg:col-span-2 space-y-12">
                <!-- Project Overview -->
                <section class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-md rounded-xl p-8 shadow-lg" data-aos="fade-up">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Project Overview</h2>
                    <div class="prose dark:prose-invert max-w-none">
                        {!! $project['description'] !!}
                    </div>
                </section>

                <!-- Features -->
                <section class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-md rounded-xl p-8 shadow-lg" data-aos="fade-up">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Key Features</h2>
                    <div class="grid md:grid-cols-2 gap-6">
                        @foreach($project['features'] as $feature)
                        <div class="flex space-x-4">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 rounded-lg bg-blue-600/20 dark:bg-blue-500/20 flex items-center justify-center">
                                    <svg class="w-5 h-5 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 dark:text-white mb-2">{{ $feature['title'] }}</h3>
                                <p class="text-gray-600 dark:text-gray-400">{{ $feature['description'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>

                <!-- Gallery -->
                <section class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-md rounded-xl p-8 shadow-lg" data-aos="fade-up">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Project Gallery</h2>
                    <div class="grid grid-cols-2 gap-4">
                        @foreach($project['gallery'] as $image)
                        <div class="relative group rounded-lg overflow-hidden">
                            <img src="{{ asset('images/projects/' . $image['url']) }}" 
                                 alt="{{ $image['caption'] }}" 
                                 class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="absolute bottom-0 left-0 right-0 p-4">
                                    <p class="text-white text-sm">{{ $image['caption'] }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>
            </div>

            <!-- Right Column - Project Details -->
            <div class="space-y-8">
                <!-- Quick Stats -->
                <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-md rounded-xl p-8 shadow-lg" data-aos="fade-up">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-6">Project Details</h3>
                    <div class="space-y-4">
                        <div class="flex justify-between">
                            <span class="text-gray-600 dark:text-gray-400">Client</span>
                            <span class="text-gray-900 dark:text-white font-medium">{{ $project['client'] }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600 dark:text-gray-400">Duration</span>
                            <span class="text-gray-900 dark:text-white font-medium">{{ $project['duration'] }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600 dark:text-gray-400">Role</span>
                            <span class="text-gray-900 dark:text-white font-medium">{{ $project['role'] }}</span>
                        </div>
                    </div>
                </div>

                <!-- Technologies Used -->
                <div class="bg-white/80 dark:bg-gray-800/80 backdrop-blur-md rounded-xl p-8 shadow-lg" data-aos="fade-up">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-6">Technologies Used</h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach($project['technologies'] as $tech)
                        <span class="px-3 py-1 bg-blue-600/20 rounded-full border border-blue-500/30 text-blue-600 dark:text-blue-400">
                            {{ $tech }}
                        </span>
                        @endforeach
                    </div>
                </div>

                <!-- Call to Action -->
                <div class="bg-gradient-to-br from-blue-600 to-purple-600 rounded-xl p-8 shadow-lg text-white" data-aos="fade-up">
                    <h3 class="text-xl font-bold mb-4">Interested in this project?</h3>
                    <p class="mb-6 text-blue-100">Let's discuss how we can create something amazing together.</p>
                    <a href="{{ route('contact') }}" class="block text-center bg-white text-blue-600 hover:bg-blue-50 font-semibold px-6 py-3 rounded-lg transition-colors">
                        Get in Touch
                    </a>
                </div>
            </div>
        </div>

        <!-- Related Projects -->
        @if(count($relatedProjects) > 0)
        <section class="mt-20" data-aos="fade-up">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-8">Related Projects</h2>
            <div class="grid md:grid-cols-3 gap-8">
                @foreach($relatedProjects as $related)
                <a href="{{ route('projects.show', $related['id']) }}" 
                   class="group bg-white/80 dark:bg-gray-800/80 backdrop-blur-md rounded-xl overflow-hidden shadow-lg transition-transform hover:-translate-y-1">
                    <div class="relative h-48">
                        <img src="{{ asset('images/projects/' . $related['image']) }}" 
                             alt="{{ $related['title'] }}" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                            <div class="absolute bottom-0 left-0 right-0 p-4">
                                <p class="text-white font-semibold">View Project</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-semibold text-gray-900 dark:text-white mb-2">{{ $related['title'] }}</h3>
                        <p class="text-gray-600 dark:text-gray-400 line-clamp-2">{{ $related['short_description'] }}</p>
                    </div>
                </a>
                @endforeach
            </div>
        </section>
        @endif
    </div>
</div>
@endsection
