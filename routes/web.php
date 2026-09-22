<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'portfolio.index')->name('home');

Route::get('/projects/{slug}', [ProjectController::class, 'show'])->name('projects.show');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
