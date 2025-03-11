<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'index'])->name('home');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'signin'])->name('login.post');

route::get('/register', [AuthController::class, 'register'])->name('register');
route::post('/register', [AuthController::class, 'signup'])->name('register.post');