<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Page\DashboardController;
use App\Http\Controllers\Page\ItemCategoryController;
use App\Http\Controllers\Page\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login_page');
});

Route::post('/login', [LoginController::class, 'login'])->name('login.submit');


// Dashboard Routes
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.page');

//Item Category Routes
Route::get('/item-category', [ItemCategoryController::class, 'index'])->name('item-category.page');

//Contact Page Routes
Route::get('/contact-page', [ContactController::class, 'index'])->name('contact-page.page');
