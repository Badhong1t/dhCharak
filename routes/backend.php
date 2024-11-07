<?php

use App\Http\Controllers\backend\AttributesController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\AttributeValueController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\backend\settings\DynamicPageController;
use App\Http\Controllers\backend\settings\ProfileController;
use App\Http\Controllers\backend\settings\SystemController;
use App\Http\Controllers\backend\SubCategoryController;
use Illuminate\Support\Facades\Route;





Route::get('dashboard', [DashboardController::class, 'index'])->middleware(['auth:web', 'admin'])->name('dashboard');

//Attribute Routes
Route::middleware(['auth:web', 'admin'])->prefix('admin')->group(function () {
    Route::resource('attributes', AttributesController::class);
});
//Attribute Value Routes
Route::middleware(['auth:web', 'admin'])->prefix('admin')->group(function () {
    Route::resource('attribute_values', AttributeValueController::class);
});

//Category Routes
Route::resource('categories', CategoryController::class);
Route::post('/categories/status/{id}', [CategoryController::class, 'status'])->name('categories.status');

//Sub Category Routes
Route::resource('subcategories', SubCategoryController::class);
Route::post('/subcategories/status/{id}', [SubCategoryController::class,'status'])->name('subcategories.status');

//product Routes
Route::middleware(['auth:web', 'admin'])->prefix('admin')->group(function () {
    Route::resource('products', ProductController::class);
});;
 //Golbal Route Here---------
 Route::get('/get-sub-category/{id}', [ProductController::class, 'getSubcategory']);
Route::post('/subcategories/status/{id}', [SubCategoryController::class, 'status'])->name('subcategories.status');

//Settings Routes
Route::controller(ProfileController::class)->group(function () {

    Route::get('/profile/index', 'index')->name('profile.index');

    Route::post('/profile/update', 'update')->name('profile.update');

    Route::post('/profile/password', 'updatePassword')->name('profile.password');
    Route::post('/profilePicture/update', 'UpdateProfilePicture')->name('profilePicture.update');
});

Route::controller(SystemController::class)->group(function () {
    Route::get('/system/index', 'index')->name('system.index');
    Route::post('/system/update', 'update')->name('system.settingsUpdate');
    Route::post('/system/mailSettingsUpdate', 'mailSettingsUpdate')->name('system.mailSettingsUpdate');
    Route::post('/system/stripeSettingsUpdate', 'stripeSettingsUpdate')->name('system.stripeSettingsUpdate');
});

//Dynamic pages routes
Route::resource('dynamicPages', DynamicPageController::class);
Route::post('/dynamicPages/status/{id}', [DynamicPageController::class, 'changeStatus'])->name('dynamicPages.status');

Route::get('/get-attribute-value/{id}', [AttributeValueController::class, 'getattributeValues'])->name('get-attribute-value');
