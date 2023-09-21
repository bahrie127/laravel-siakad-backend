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
    return view('pages.app.dashboard-siakad',['type_menu' =>''  ]);
})->name('dashboard');

Route::get('/login', function () {
    return view('pages.auth.auth-login');
})->name('login');

Route::get('/register', function () {
    return view('pages.auth.auth-register');
})->name('register');

Route::get('/forgot', function () {
    return view('pages.auth.auth-forgot-password');
})->name('forgot');

Route::get('/reset-password', function () {
    return view('pages.auth.auth-reset-password');
})->name('reset-password');