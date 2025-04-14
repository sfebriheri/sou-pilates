<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BookingController;

// Public routes
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/classes', [PageController::class, 'classes'])->name('classes');
Route::get('/instructors', [PageController::class, 'instructors'])->name('instructors');
Route::get('/prices', [PageController::class, 'prices'])->name('prices');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Booking routes
Route::get('/booking', [BookingController::class, 'index'])->name('booking');
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');

// Admin routes (protected by auth middleware)
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('classes', App\Http\Controllers\Admin\ClassController::class, ['as' => 'admin']);
    Route::resource('instructors', App\Http\Controllers\Admin\InstructorController::class, ['as' => 'admin']);
    Route::resource('bookings', App\Http\Controllers\Admin\BookingController::class, ['as' => 'admin']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
