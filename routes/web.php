<?php

use App\Http\Controllers\EmployeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('employees', EmployeController::class);
Route::get('/', [LoginController::class, 'showLogin'])->name('login.show');
Route::post('/', [LoginController::class, 'storeLogin'])->name('login.store');
Route::get('/signup', [LoginController::class, 'showSignUp'])->name('signup.show');
Route::post('/signup', [LoginController::class, 'storeSignUp'])->name('signup.store');
