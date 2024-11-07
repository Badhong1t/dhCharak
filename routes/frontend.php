<?php

use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\ProfileController;
use Illuminate\Support\Facades\Route;



Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
});


Route::controller(ProfileController::class)->group(function () {
    Route::get('/profile', 'profile')->name('profile');
    Route::get('/user/logout', 'logout')->name('user.logout');
});

