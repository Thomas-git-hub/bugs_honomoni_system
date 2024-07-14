<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

Route::get('/', [AuthController::class, 'index'])->name("registration");
Route::get('/user', [UserController::class, 'user']);
Route::get('/change/pass', [UserController::class, 'change_pass']);
Route::get('/login', [UserController::class, 'login'])->name("login");
Route::get('/dashboard', [UserController::class, 'dashboard']);
// Route::get('/admin', [AdminController::class, 'index']);

Route::post('/submit', function () {
    // Handle form submission logic here
    // Validate and process form data
    // Redirect or return response as needed
})->name('submit.form');
