<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\DetailProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\AllProductController;
use App\Http\Controllers\DeliveryController;


// Route for the landing page
Route::get('/', [LandingPageController::class, 'index']);

// Route for the product detail page
Route::get('/detailproduct', [DetailProductController::class, 'show']);

// Route for the login page
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login'); // Ensure this route exists
Route::post('/login', [AuthController::class, 'login'])->name('login.post'); // Ensure this route exists

// Route for the registration page
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register'); // Add name
Route::post('/register', [AuthController::class, 'register'])->name('register.post'); // Add name

// Route for Google login
Route::get('/login/google', [AuthController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/login/google/callback', [AuthController::class, 'handleGoogleCallback'])->name('google.callback');

// Route for the profile page
Route::get('/profile', function () {
    return view('pages.profile');
})->name('profile');

// Route for the payment page
Route::get('/payment', function () {
    return view('pages.payment');
})->name('payment');

Route::get('/invoices', function () {
    return view('pages.invoices');
})->name('pages.invoices');

Route::get('/allproduct', function () {
    return view('pages.allproduct');
})->name('pages.allproduct');

Route::get('/delivery', function () {
    return view('pages.delivery');
})->name('pages.delivery');
