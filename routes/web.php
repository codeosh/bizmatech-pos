<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Page\DashboardController;
use App\Http\Controllers\Page\ItemCategoryController;
use App\Http\Controllers\Page\ContactController;
use App\Http\Controllers\Page\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login_page');
});

Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// Profile Page Routes
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.page');

// Dashboard Routes
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.page');

// Item Category Routes
Route::get('/item-category', [ItemCategoryController::class, 'index'])->name('item-category.page');
Route::post('/item-category/store', [ItemCategoryController::class, 'store'])->name('itemcategory.store');
Route::delete('/item-category/{id}', [ItemCategoryController::class, 'destroy'])->name('item-category.destroy');


// Contact Page Routes
Route::get('/contact-page', [ContactController::class, 'index'])->name('contact-page.page');
