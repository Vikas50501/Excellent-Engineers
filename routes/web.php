<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CareerController;

/*
|--------------------------------------------------------------------------
| Web Routes — Excellent Dry-Tech Pvt Ltd
|--------------------------------------------------------------------------
*/

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/about-us', [PageController::class, 'about']);

Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('/projects', [PageController::class, 'gallery']);

Route::get('/maintenance', [PageController::class, 'maintenance'])->name('maintenance');

Route::get('/careers', [CareerController::class, 'index'])->name('careers');
Route::post('/careers', [CareerController::class, 'submit'])->name('careers.submit');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/contact-us', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
