<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
})-> name('register');
// Route::get('/register', [AuthController::class, 'register'])->name('register');
