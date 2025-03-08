<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

// Public routes
Route::get('/', function () {
    return inertia('Landing');
});

// Auth Routes
Route::get('/login', function () {
    return inertia('Auth/login');
});
