<?php
;
use Illuminate\Support\Facades\Route;

Route::get('lang', [App\Http\Controllers\LanguageController::class, 'change'])->name("change.lang");

Route::get('/', [App\Http\Controllers\Front\HomeController::class, 'index'])->name('front.index');
Route::get('/about', [App\Http\Controllers\Front\HomeController::class, 'about'])->name('front.about');
Route::get('/contact', [App\Http\Controllers\Front\HomeController::class, 'contact'])->name('front.contact');

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::prefix('back')->middleware('auth')->name('back.')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Back\DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('gallery')->name('gallery.')->group(function () {
        Route::get('/album', [App\Http\Controllers\Back\GalleryController::class, 'album'])->name('album');
        Route::post('/album', [App\Http\Controllers\Back\GalleryController::class, 'albumStore'])->name('album.store');
        Route::put('/album/{id}', [App\Http\Controllers\Back\GalleryController::class, 'albumUpdate'])->name('album.update');
        Route::delete('/album/{id}', [App\Http\Controllers\Back\GalleryController::class, 'albumDestroy'])->name('album.destroy');

        Route::get('/', [App\Http\Controllers\Back\GalleryController::class, 'index'])->name('index');
        Route::post('/create', [App\Http\Controllers\Back\GalleryController::class, 'store'])->name('store');
        Route::put('/edit/{id}', [App\Http\Controllers\Back\GalleryController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [App\Http\Controllers\Back\GalleryController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('testimonial')->name('testimonial.')->group(function () {
        Route::get('/', [App\Http\Controllers\Back\TestimonialController::class, 'index'])->name('index');
        Route::post('/create', [App\Http\Controllers\Back\TestimonialController::class, 'store'])->name('store');
        Route::put('/edit/{id}', [App\Http\Controllers\Back\TestimonialController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [App\Http\Controllers\Back\TestimonialController::class, 'destroy'])->name('destroy');
        Route::put('/status', [App\Http\Controllers\Back\TestimonialController::class, 'changeStatus'])->name('status');
    });

    Route::prefix('message')->name('message.')->group(function () {
        Route::get('/', [App\Http\Controllers\Back\MessageController::class, 'index'])->name('index');
        Route::delete('/{id}', [App\Http\Controllers\Back\MessageController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('user')->name('user.')->group(function () {
        Route::get('/', [App\Http\Controllers\Back\UserController::class, 'index'])->name('index');
        Route::get('/create', [App\Http\Controllers\Back\UserController::class, 'create'])->name('create');
        Route::post('/create', [App\Http\Controllers\Back\UserController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [App\Http\Controllers\Back\UserController::class, 'edit'])->name('edit');
        Route::put('/{id}/edit', [App\Http\Controllers\Back\UserController::class, 'update'])->name('update');
        Route::delete('/{id}/delete', [App\Http\Controllers\Back\UserController::class, 'delete'])->name('delete');
    });
    Route::prefix('setting')->name('setting.')->group(function () {
        Route::get('/website', [App\Http\Controllers\back\SettingController::class, 'website'])->name('website');
        Route::put('/website', [App\Http\Controllers\back\SettingController::class, 'websiteUpdate'])->name('website.update');
        Route::put('/website/info', [App\Http\Controllers\back\SettingController::class, 'informationUpdate'])->name('website.info');
    });
});
