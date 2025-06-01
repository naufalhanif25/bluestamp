<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StampController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;

// Halaman Utama
Route::get('/', function () {
    return view('home');
})->name('home');

// Autentikasi (Login, Register, Logout)
Route::get('/signin', [LoginController::class, 'showLoginForm'])->name('signin');
Route::post('/signin', [LoginController::class, 'signin']);
Route::get('/signup', [RegisterController::class, 'showRegisterForm'])->name('signup');
Route::post('/signup', [RegisterController::class, 'signup']);
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

// Halaman Lain
Route::get('/profile', function () {
    return view('profile');
})->middleware('auth')->name('profile');

Route::get('/explore', [StampController::class, 'explore'])->name('explore');

Route::get('/share', function () {
    return view('share');
})->name('share');

Route::get('/about', function () {
    return view('about');

})->name('about');

// Stamp Controller
Route::post('/stamps', [StampController::class, 'store'])->name('stamps.store');
Route::post('/explore/{id}/love', [StampController::class, 'toggleLove'])->name('stamps.love');
Route::get('/stamps', [StampController::class, 'index'])->name('stamps.index');
