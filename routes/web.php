<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/signin', function () {
    return view('signin');
})->name('signin');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/explore', function () {
    return view('explore');
})->name('explore');

Route::get('/share', function () {
    return view('share');
})->name('share');

Route::get('/about', function () {
    return view('about');
})->name('about');