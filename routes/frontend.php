<?php

use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\ProfileController;
use Illuminate\Support\Facades\Route;



Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/special-orders', 'specialOrders')->name('specialOrders');
    Route::get('/special-orders-form', 'specialOrdersForm')->name('specialOrdersForm');
    Route::get('/how-works', 'howWorks')->name('howWorks');
    Route::get('/handling-goods', 'handlingGoods')->name('handlingGoods');
    Route::get('/delivery-details', 'deliveryDetails')->name('deliveryDetails');
    Route::get('/pickup-locations', 'pickupLocations')->name('pickupLocations');
    Route::get('/privacy-statement', 'privacyStatement')->name('privacyStatement');
    Route::get('/terms-and-conditions', 'termsAndConditions')->name('termsAndConditions');
    Route::get('/products', 'products')->name('products');
    Route::get('/product-details', 'productDetails')->name('productDetails');
    Route::get('/my-cart', 'cart')->name('cart');
    Route::get('/checkout', 'checkout')->name('checkout');
});


Route::controller(ProfileController::class)->group(function () {
    Route::get('/profile', 'profile')->name('profile');
    Route::get('/user/logout', 'logout')->name('user.logout');
});

