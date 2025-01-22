@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6">
    <!-- About Hero Section -->
    <section class="py-20">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="space-y-6" data-aos="fade-right">
                <h1 class="text-4xl font-bold text-gray-900 dark:text-white">About Me</h1>
                <p class="text-lg text-gray-600 dark:text-gray-400">
                    I'm Arione John Dauis, an IT Technical Support Specialist and Web Developer with a passion for solving technical challenges and creating efficient solutions.
                </p>
                <div class="flex items-center space-x-4">
                    <a href="https://www.linkedin.com/in/arione-john-dauis" target="_blank" class="text-blue-600 hover:text-blue-700 transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                    <a href="mailto:dauis.arione@gmail.com" class="text-red-600 hover:text-red-700 transition-colors">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                    </a>
                </div>
            </div>
            <div class="relative" data-aos="fade-left">
                <div class="w-full h-96 rounded-lg overflow-hidden shadow-xl">
                    <img src="{{ asset('images/profile.jpg') }}" alt="Arione John Dauis" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section class="py-20">
        <h2 class="text-3xl font-bold mb-12 text-gray-900 dark:text-white" data-aos="fade-up">Work Experience</h2>
        <div class="space-y-12">
            <!-- Experience Item 1 -->
            <div class="grid md:grid-cols-3 gap-8 items-start" data-aos="fade-up">
                <div class="md:col-span-1">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Backend Head Developer</h3>
                    <p class="text-blue-600 dark:text-blue-400">2023-2024</p>
                    <p class="text-gray-600 dark:text-gray-400">ALLIANCE OF LEADING PROGRAMMERS</p>
                </div>
                <div class="md:col-span-2 space-y-4">
                    <ul class="list-disc list-inside text-gray-600 dark:text-gray-400 space-y-2">
                        <li>Developed efficient backend systems, enhancing organizational efficiency by 35%</li>
                        <li>Spearheaded the training of rookie developers in the organization</li>
                        <li>Developed and deployed automated emailing systems and event ticketing systems</li>
                    </ul>
                </div>
            </div>

            <!-- Experience Item 2 -->
            <div class="grid md:grid-cols-3 gap-8 items-start" data-aos="fade-up" data-aos-delay="100">
                <div class="md:col-span-1">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">IT Technical Support</h3>
                    <p class="text-blue-600 dark:text-blue-400">2019-Present</p>
                    <p class="text-gray-600 dark:text-gray-400">Freelance</p>
                </div>
                <div class="md:col-span-2 space-y-4">
                    <ul class="list-disc list-inside text-gray-600 dark:text-gray-400 space-y-2">
                        <li>Delivered remote and on-site diagnostics to diverse clients</li>
                        <li>Resolved operating system issues, optimized system performance</li>
                        <li>Restored personal device functionality, ensuring high customer satisfaction</li>
                        <li>Performed hardware troubleshooting and provided desktop consultation services</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section class="py-20">
        <h2 class="text-3xl font-bold mb-12 text-gray-900 dark:text-white" data-aos="fade-up">Education</h2>
        <div class="space-y-12">
            <div class="grid md:grid-cols-3 gap-8 items-start" data-aos="fade-up">
                <div class="md:col-span-1">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">STI ORTIGAS-CAINTA</h3>
                    <p class="text-blue-600 dark:text-blue-400">Bachelor of Science in Computer Science</p>
                </div>
                <div class="md:col-span-2">
                    <p class="text-gray-600 dark:text-gray-400">
                        Focused on computer science fundamentals, software development, and IT systems management.
                    </p>
                </div>
            </div>

            <div class="grid md:grid-cols-3 gap-8 items-start" data-aos="fade-up" data-aos-delay="100">
                <div class="md:col-span-1">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">GOLDEN FAITH ACADEMY</h3>
                    <p class="text-blue-600 dark:text-blue-400">Graduate of STEM Strand</p>
                </div>
                <div class="md:col-span-2">
                    <p class="text-gray-600 dark:text-gray-400">
                        Completed STEM education with focus on science, technology, engineering, and mathematics.
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
