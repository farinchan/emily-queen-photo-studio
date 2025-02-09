<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/contact', [App\Http\Controllers\Front\HomeController::class, 'sendMessage'])->name('api.front.contact.post');

