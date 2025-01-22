<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    private $projects = [
        [
            'id' => 1,
            'title' => 'ShuttleTrack System',
            'category' => 'Web Application',
            'banner_image' => 'shuttletrack-banner.jpg',
            'image' => 'shuttletrack.jpg',
            'short_description' => 'A real-time shuttle tracking system for university transportation',
            'description' => '
                <p class="mb-4">ShuttleTrack is a comprehensive shuttle tracking system designed to revolutionize university transportation. The system provides real-time tracking of shuttle locations, estimated arrival times, and passenger counts to help students and staff plan their commutes efficiently.</p>
                
                <p class="mb-4">The application features an intuitive interface that displays shuttle routes, stop locations, and live vehicle positions on an interactive map. Users can set up notifications for their preferred routes and receive alerts about delays or schedule changes.</p>
                
                <p>The system has significantly improved the campus transportation experience by reducing wait times and providing reliable scheduling information to thousands of daily users.</p>
            ',
            'client' => 'University Transportation Department',
            'duration' => '6 months',
            'completion_date' => 'December 2024',
            'role' => 'Lead Developer',
            'technologies' => ['Laravel', 'Vue.js', 'WebSocket', 'Google Maps API', 'TailwindCSS'],
            'features' => [
                [
                    'title' => 'Real-time Tracking',
                    'description' => 'Live GPS tracking of shuttle locations with updates every 30 seconds'
                ],
                [
                    'title' => 'Route Planning',
                    'description' => 'Interactive route planning with estimated arrival times'
                ],
                [
                    'title' => 'Push Notifications',
                    'description' => 'Instant alerts for delays and schedule changes'
                ],
                [
                    'title' => 'Analytics Dashboard',
                    'description' => 'Comprehensive analytics for route optimization and usage patterns'
                ]
            ],
            'gallery' => [
                [
                    'url' => 'shuttletrack-1.jpg',
                    'caption' => 'Live tracking interface showing multiple shuttles'
                ],
                [
                    'url' => 'shuttletrack-2.jpg',
                    'caption' => 'Mobile app interface for route planning'
                ],
                [
                    'url' => 'shuttletrack-3.jpg',
                    'caption' => 'Analytics dashboard for administrators'
                ],
                [
                    'url' => 'shuttletrack-4.jpg',
                    'caption' => 'Push notification system interface'
                ]
            ],
            'featured' => true
        ],
        [
            'id' => 2,
            'title' => 'Event Management Portal',
            'category' => 'Web Platform',
            'banner_image' => 'events-banner.jpg',
            'image' => 'events.jpg',
            'short_description' => 'A comprehensive event management system for corporate events',
            'description' => '
                <p class="mb-4">The Event Management Portal is a sophisticated platform designed to streamline the entire event planning and execution process. From initial concept to post-event analysis, this system provides event organizers with powerful tools to manage every aspect of their events.</p>
                
                <p class="mb-4">The platform includes features for ticket sales, attendee management, speaker scheduling, and real-time analytics. Its modular design allows for easy customization based on specific event requirements.</p>
                
                <p>The system has been successfully used to manage numerous corporate events, conferences, and workshops, handling thousands of attendees seamlessly.</p>
            ',
            'client' => 'Corporate Events Inc.',
            'duration' => '8 months',
            'completion_date' => 'October 2024',
            'role' => 'Full Stack Developer',
            'technologies' => ['PHP', 'Laravel', 'MySQL', 'React', 'AWS'],
            'features' => [
                [
                    'title' => 'Ticket Management',
                    'description' => 'Advanced ticketing system with multiple tiers and early bird pricing'
                ],
                [
                    'title' => 'Attendee Dashboard',
                    'description' => 'Personalized dashboard for attendees to manage their schedule'
                ],
                [
                    'title' => 'Speaker Portal',
                    'description' => 'Dedicated portal for speakers to manage their sessions'
                ],
                [
                    'title' => 'Analytics Suite',
                    'description' => 'Comprehensive analytics for event performance tracking'
                ]
            ],
            'gallery' => [
                [
                    'url' => 'events-1.jpg',
                    'caption' => 'Event dashboard overview'
                ],
                [
                    'url' => 'events-2.jpg',
                    'caption' => 'Ticket management interface'
                ],
                [
                    'url' => 'events-3.jpg',
                    'caption' => 'Speaker management portal'
                ],
                [
                    'url' => 'events-4.jpg',
                    'caption' => 'Analytics dashboard'
                ]
            ],
            'featured' => true
        ]
    ];

    public function index()
    {
        return view('pages.projects', ['projects' => $this->projects]);
    }

    public function show($id)
    {
        $project = collect($this->projects)->firstWhere('id', (int) $id);
        
        if (!$project) {
            abort(404);
        }

        $relatedProjects = collect($this->projects)
            ->filter(function ($item) use ($project) {
                return $item['id'] !== $project['id'] && 
                       !empty(array_intersect($item['technologies'], $project['technologies']));
            })
            ->take(3)
            ->all();

        return view('pages.project-detail', [
            'project' => $project,
            'relatedProjects' => $relatedProjects
        ]);
    }

    public function getFeatured()
    {
        return collect($this->projects)
            ->filter(function ($project) {
                return $project['featured'] ?? false;
            })
            ->values()
            ->all();
    }
}
