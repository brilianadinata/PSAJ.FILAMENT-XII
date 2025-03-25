<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\DetailProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PaymentController;

// Route for the landing page
Route::get('/', [LandingPageController::class, 'index']);

// Route for the product detail page
Route::get('/detailproduct', [DetailProductController::class, 'show']);

// Route for the login page
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login'); // Add name
Route::post('/login', [AuthController::class, 'login'])->name('login.post'); // Add name

// Route for Google login
Route::get('/login/google', [AuthController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/login/google/callback', [AuthController::class, 'handleGoogleCallback'])->name('google.callback');

// Route for the registration page
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register'); // Add name
Route::post('/register', [AuthController::class, 'register'])->name('register.post'); // Add name

// Route for the profile page
Route::get('/profile', [ProfileController::class, 'show'])->name('profile');

// Route for the payment page
Route::get('/payment', [PaymentController::class, 'show'])->name('payment');

// Route for the logout functionality
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
