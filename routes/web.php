<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admain\AdmainController;
use App\Http\Controllers\ConversationController;

// Routes for main pages
Route::get('/', [MainController::class, 'index'])->name('index');

Route::middleware('auth','verified')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/posts', [SiteController::class, 'index'])->name('posts');
    Route::get('/post', [SiteController::class, 'post'])->name('post');
    Route::get('/conversations', [ConversationController::class, 'index'])->name('conversations.index');
    Route::post('/conversations', [ConversationController::class, 'show'])->name('conversations.show');
});

// Authentication routes
Auth::routes(['verify' => true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
