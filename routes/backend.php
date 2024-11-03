<?php

use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('categories', CategoryController::class);
Route::post('/categories/status/{id}', [CategoryController::class, 'status'])->name('categories.status');
