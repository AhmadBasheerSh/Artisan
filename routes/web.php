<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ProfileController;

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/profile', [ProfileController::class, 'index'])->name('index');
Route::get('/posts', [SiteController::class, 'index'])->name('index');
Route::get('/post', [SiteController::class, 'post'])->name('post');

// إضافة المسارات الجديدة الخاصة بالتسجيل وتسجيل الدخول
Route::get('/loggin', [MainController::class, 'login'])->name('login');
Route::get('/reg', [MainController::class, 'register'])->name('register');
