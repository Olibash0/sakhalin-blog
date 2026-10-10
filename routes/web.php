<?php

use Illuminate\Support\Facades\Route;

// Главная страница
Route::get('/', function () {
    return view('home');
})->name('home');

// Страница категории (заглушка)
Route::get('/category/{slug}', function ($slug) {
    return view('category', ['slug' => $slug]);
})->name('category');

// О проекте
Route::get('/about', function () {
    return view('about');
})->name('about');

// Авторизация (заглушки)
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');