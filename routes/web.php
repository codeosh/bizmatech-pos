<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Page\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login_page');
});

Route::post('/login', [LoginController::class, 'login'])->name('login.submit');


// Dashboard Routes
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.page');
