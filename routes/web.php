<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

// Public routes
Route::get('/', function () {
    return inertia('Landing');
});

Route::get('/registration', fn() => inertia('Registration'));

// Auth Routes
Route::get('/login', function () {
    return inertia('Auth/login');
});
