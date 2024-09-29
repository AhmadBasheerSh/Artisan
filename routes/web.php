<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/',[MainController::class, 'index'])->name('index');

Route::get('/loggin',[MainController::class, 'login'])->name('login');
Route::get('/reg',[MainController::class, 'register'])->name('register');
