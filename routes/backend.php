<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\AttributesController;

Route::get('dashboard', [DashboardController::class, 'index'])->middleware(['auth:web', 'admin'])->name('dashboard');

Route::middleware(['auth:web', 'admin'])->prefix('admin')->group(function () {
    Route::resource('attributes', AttributesController::class);
});
