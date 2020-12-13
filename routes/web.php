<?php

use Illuminate\Support\Facades\Route;

// ADMIN PANEL
Route::prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin_index');

    Route::get('/hotels', [App\Http\Controllers\HotelController::class, 'hotel_show'])->name('admin_hotel_show');
    Route::get('/hotel/edit/{id}', [App\Http\Controllers\HotelController::class, 'hotel_edit'])->name('admin_hotel_edit');
    Route::post('/hotel/edit', [App\Http\Controllers\HotelController::class, 'hotel_edit_post'])->name('admin_hotel_edit_post');
    Route::get('/hotel/new', [App\Http\Controllers\HotelController::class, 'hotel_add'])->name('admin_hotel_add');
    Route::post('/hotel/new', [App\Http\Controllers\HotelController::class, 'hotel_add_post'])->name('admin_hotel_add_post');

    Route::get('/events', [App\Http\Controllers\EventController::class, 'event_show'])->name('admin_event_show');
    Route::get('/event/edit/{id}', [App\Http\Controllers\EventController::class, 'event_edit'])->name('admin_event_edit');
    Route::post('/event/edit', [App\Http\Controllers\EventController::class, 'event_edit_post'])->name('admin_event_edit_post');
    Route::get('/event/new', [App\Http\Controllers\EventController::class, 'event_add'])->name('admin_event_add');
    Route::post('/event/new', [App\Http\Controllers\EventController::class, 'event_add_post'])->name('admin_event_add_post');
});

Route::get('/', [App\Http\Controllers\SiteController::class, 'index'])->name('index');
Route::get('/search', [App\Http\Controllers\SiteController::class, 'search'])->name('search');
Route::get('/photogallery', [App\Http\Controllers\SiteController::class, 'photogallery'])->name('photogallery');
Route::get('/excursion', [App\Http\Controllers\SiteController::class, 'excursion'])->name('excursion');
Route::get('/excursion_list', [App\Http\Controllers\SiteController::class, 'excursion_list'])->name('excursion_list');
Route::get('/hotel/{id}', [App\Http\Controllers\SiteController::class, 'hotel'])->name('hotel');
Route::get('/hotel_list', [App\Http\Controllers\SiteController::class, 'hotel_list'])->name('hotel_list');
Route::get('/publishes', [App\Http\Controllers\SiteController::class, 'publishes'])->name('publishes');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
