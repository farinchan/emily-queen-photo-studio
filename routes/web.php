<?php

use Illuminate\Support\Facades\Route;

Route::get('lang', [App\Http\Controllers\LanguageController::class, 'change'])->name("change.lang");

Route::get('/', [App\Http\Controllers\Front\HomeController::class, 'index'])->name('front.index');
Route::get('/about', [App\Http\Controllers\Front\HomeController::class, 'about'])->name('front.about');
Route::get('/contact', [App\Http\Controllers\Front\HomeController::class, 'contact'])->name('front.contact');
