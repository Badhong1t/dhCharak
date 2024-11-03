<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashboardController;

Route::get('dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

