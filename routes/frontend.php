<?php

use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\Frontend\PageController;
use Illuminate\Support\Facades\Route;


Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
});
