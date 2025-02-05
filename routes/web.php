<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Front\HomeController::class, 'index'])->name('front.index');
Route::get('/about', [App\Http\Controllers\Front\HomeController::class, 'about'])->name('front.about');
Route::get('/contact', [App\Http\Controllers\Front\HomeController::class, 'contact'])->name('front.contact');
