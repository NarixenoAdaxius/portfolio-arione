<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $projectController = new \App\Http\Controllers\ProjectController();
    $featuredProjects = $projectController->getFeatured();
    return view('pages.home', ['featuredProjects' => $featuredProjects]);
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/projects', [App\Http\Controllers\ProjectController::class, 'index'])->name('projects');
Route::get('/projects/{id}', [App\Http\Controllers\ProjectController::class, 'show'])->name('projects.show');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
