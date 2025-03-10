<?php

declare(strict_types=1);

use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

// Public routes
Route::get('/', function () {
    return inertia('Landing');
});

Route::get('/registration', fn () => inertia('Registration'));
Route::post('/register', RegistrationController::class);

// Auth Routes
Route::get('/login', function () {
    return inertia('Auth/login');
});
