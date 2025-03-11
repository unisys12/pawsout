<?php

declare(strict_types=1);

use App\Http\Controllers\OrganizationController;
use App\Models\Organization;
use Illuminate\Support\Facades\Route;

// Public routes
Route::get('/', function () {
    return inertia('Landing');
});

// Auth Routes
Route::get('/login', function () {
    return inertia('Auth/LoginView');
});

Route::resource('organization', OrganizationController::class);

Route::inertia('/dashboard', 'Dashboard', ['org' => Organization::first()])->name('dashboard');
