<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admain\AdmainController;

// Routes for main pages
Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/posts', [SiteController::class, 'index'])->name('posts');
Route::get('/post', [SiteController::class, 'post'])->name('post');

// Authentication routes
// Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Custom login and registration routes
Route::get('/loggin', [MainController::class, 'login'])->name('login');
Route::get('/reg', [MainController::class, 'register'])->name('register');
