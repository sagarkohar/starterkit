<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// to open the home page
Route::get('/', [UserController::class, 'home'])->name('home');

// to open the registeration page
Route::get('/registeration', [UserController::class, 'registerationView'])->name('registeration');

// to open the login page
Route::get('/login', [UserController::class, 'loginView'])->name('login');