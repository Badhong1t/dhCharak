<?php

use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\SubCategoryController;
use Illuminate\Support\Facades\Route;


Route::get('dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

//Category Routes
Route::resource('categories', CategoryController::class);
Route::post('/categories/status/{id}', [CategoryController::class, 'status'])->name('categories.status');

//Sub Category Routes
Route::resource('subcategories', SubCategoryController::class);
Route::post('/subcategories/status/{id}', [SubCategoryController::class,'status'])->name('subcategories.status');
