<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('loginPost');
Route::get('/login', [\App\Http\Controllers\AuthController::class, 'loginForm'])->name('login');

Route::get('/register', [\App\Http\Controllers\AuthController::class, 'registerForm'])->name('register');
Route::post('/register', [\App\Http\Controllers\AuthController::class, 'register'])->name('registerPost');
