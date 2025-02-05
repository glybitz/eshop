<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view("hello");
});

Route::get('/login', [UserController::class, 'login'])->name('user.login');
Route::post('/login', [UserController::class, 'authenticate'])->name('user.authenticate');

Route::get('/register', [UserController::class, 'register'])->name('user.register');
Route::post('/register', [UserController::class, 'saveuser'])->name('user.saveuser');

//Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
//Route::post('/register', [UserController::class, 'saveuser'])->name('user.saveuser');

Route::get('/profile', [UserController::class, 'profile'])->name('user.profile')->middleware('auth');