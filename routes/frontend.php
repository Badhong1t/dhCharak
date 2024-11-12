<?php

use App\Http\Controllers\Frontend\Cart\CartController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\Payment\PaymentController;
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
    Route::get('/subcategorywise/product/{id}', 'productsBySubcategory')->name('subcategorywise.product');
    Route::get('/orders', 'orders')->name('orders');
    Route::get('/account-details', 'accountDetails')->name('accountDetails');
});

Route::controller(CartController::class)->group(function () {
    Route::get('/cart', 'index')->name('cart.index');
    Route::post('/add-to-cart', 'addToCart')->name('add-to-cart');
    Route::post('/cart/increase-quantity/{rowId}', 'increase_cart_quantity')->name('cart.increase-quantity');
    Route::post('/cart/decrease-quantity/{rowId}', 'decrease_cart_quantity')->name('cart.decrease-quantity');
    Route::delete('/cart/remove-item/{rowId}', 'remove_item')->name('cart.remove-item');
    Route::delete('/cart/empty', 'empty_cart')->name('cart.empty');
});

Route::controller(PaymentController::class)->group(function () {
    Route::get('/checkout', 'checkout')->name('checkout');
    // Route::post('/checkout/store', 'store')->name('checkout.store');
    Route::post('/checkout/process-payment', 'processPayment')->name('checkout.store');
});
Route::controller(ProfileController::class)->group(function () {
    Route::get('/profile', 'profile')->name('profile');
    Route::get('/user/logout', 'logout')->name('user.logout');
});

