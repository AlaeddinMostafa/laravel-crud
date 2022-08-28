<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\NewsletterController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;




Route::get('/dashboard', [HomeController::class, 'index'])->name('home');

// Slider


Route::prefix('/dashboard/slider')->controller(SliderController::class)->name('slider.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('create', 'create')->name('create');
    Route::get('show/{slider}', 'show')->name('show');
    Route::get('edit/{slider}', 'edit')->name('edit');
    Route::post('store', 'store')->name('store');
    Route::put('update/{slider}', 'update')->name('update');
    Route::post('delete/{slider}', 'destroy')->name('delete');
});


Route::prefix('/dashboard/newsletter')->controller(NewsletterController::class)->name('newsletter.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('store', 'store')->name('store');
    Route::post('delete/{newsletter}', 'destroy')->name('delete');
});


Route::prefix('/dashboard/blog')->controller(BlogController::class)->name('blog.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('create', 'create')->name('create');
    Route::get('show/{blog}', 'show')->name('show');
    Route::get('edit/{blog}', 'edit')->name('edit');
    Route::post('store', 'store')->name('store');
    Route::post('update/{blog}', 'update')->name('update');
    Route::post('delete/{blog}', 'destroy')->name('delete');
});

Route::prefix('/dashboard/contact')->controller(ContactController::class)->name('contact.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('store', 'store')->name('store');
    Route::post('delete/{contact}', 'destroy')->name('delete');
});


Route::prefix('/dashboard/about')->controller(AboutController::class)->name('about.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('create', 'create')->name('create');
    Route::get('edit/{about}', 'edit')->name('edit');
    Route::post('store', 'store')->name('store');
    Route::post('update/{about}', 'update')->name('update');
});
