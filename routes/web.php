<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AuthController;

// Auth Routes
Route::get('/system-access', [AuthController::class, 'showLogin'])->name('login');
Route::post('/system-access', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('yonkous-home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/become-driver', function () {
    return view('become-driver');
});

Route::get('/driver/register', [DriverController::class, 'showRegistrationForm'])->name('driver.register');
Route::post('/driver/register', [DriverController::class, 'store'])->name('driver.register.submit');
Route::get('/driver/register/success', [DriverController::class, 'showSuccess'])->name('driver.register.success');

Route::get('/security', function () {
    return view('security');
});

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact');
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/help', function () {
    return view('help');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/privacy', function () {
    return view('privacy');
});

// Admin Routes
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Driver management
    Route::get('/drivers', [AdminController::class, 'drivers'])->name('admin.drivers');
    Route::patch('/drivers/{id}/toggle-payment', [AdminController::class, 'togglePayment'])->name('admin.drivers.toggle-payment');
    Route::patch('/drivers/{id}/approve', [AdminController::class, 'approveDriver'])->name('admin.drivers.approve');
    Route::patch('/drivers/{id}/reject', [AdminController::class, 'rejectDriver'])->name('admin.drivers.reject');

    // Contact management
    Route::get('/contacts', [AdminController::class, 'contacts'])->name('admin.contacts');
    Route::patch('/contacts/{id}/update', [AdminController::class, 'updateContactStatus'])->name('admin.contacts.update');
});

