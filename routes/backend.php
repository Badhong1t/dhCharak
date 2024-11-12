<?php

use App\Http\Controllers\backend\AttributesController;

use App\Http\Controllers\backend\AttributeValueController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\CMS\HandlingFrozenGoods;
use App\Http\Controllers\backend\CMS\HowDeliveryWorks;
use App\Http\Controllers\backend\CMS\HowItWork;
use App\Http\Controllers\backend\CMS\HowWorkTitle;
use App\Http\Controllers\backend\CMS\PickupInstructions;
use App\Http\Controllers\backend\CMS\SpecialOrders;
use App\Http\Controllers\backend\CMS\StayConnectedWithBulksail;
use App\Http\Controllers\backend\CMS\WhyChooseBulksail;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\backend\settings\DynamicPageController;
use App\Http\Controllers\backend\settings\ProfileController;
use App\Http\Controllers\backend\settings\SocialLinkController;
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
    Route::post('/products/status/{id}', [ProductController::class, 'Status'])->name('product.status');
    Route::delete('/product/attribute-delete/{id}', [ProductController::class, 'attributeDelete'])->name('product.attribute-delete');
    Route::post('/product/image/delete/{id}', [ProductController::class, 'imageDelete'])->name('product.delete-image');
});;
 //Golbal Route Here---------
 Route::get('/get-sub-category/{id}', [ProductController::class, 'getSubcategory']);
 Route::get('/get-attribute-values/{id}', [AttributeValueController::class, 'getAttributeValues'])->name('get-attribute-value');

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

//Social Link routes
Route::resource('socialLinks', SocialLinkController::class);
Route::post('/socialLinks/status/{id}', [SocialLinkController::class, 'changeStatus'])->name('socialLinks.status');

//CMS routes
Route::resource('handlingFrozenGoods', HandlingFrozenGoods::class);
Route::post('/handlingFrozenGoods/update', [HandlingFrozenGoods::class, 'handlingFrozenGoodsUpdate'])->name('handlingFrozenGoodsUpdate');
Route::post('/handlingFrozenGoods/status/{id}', [HandlingFrozenGoods::class, 'status'])->name('handlingFrozenGoodsStatus');

Route::resource('whyChooseBulksail', WhyChooseBulksail::class);
Route::post('/whyChooseBulksail/update', [WhyChooseBulksail::class, 'whyChooseBulksailUpdate'])->name('whyChooseBulksailUpdate');
Route::post('/whyChooseBulksail/status/{id}', [WhyChooseBulksail::class, 'status'])->name('whyChooseBulksailStatus');

Route::resource('howItWorks', HowItWork::class);
Route::post('/howItWorks/update', [HowItWork::class, 'howItWorksUpdate'])->name('howItWorksUpdate');
Route::post('/howItWorks/status/{id}', [HowItWork::class, 'status'])->name('howItWorksStatus');

Route::resource('specialOrders', SpecialOrders::class);
Route::post('/specialOrders/update', [SpecialOrders::class, 'specialOrdersUpdate'])->name('specialOrdersUpdate');
Route::post('/specialOrders/status/{id}', [SpecialOrders::class, 'status'])->name('specialOrdersStatus');

Route::get('/howDeliveryWorks', [HowDeliveryWorks::class, 'index'])->name('howDeliveryWorks');
Route::post('/howDeliveryWorks/update', [HowDeliveryWorks::class, 'howDeliveryWorksUpdate'])->name('howDeliveryWorksUpdate');
Route::post('/howDeliveryWorksImage/update', [HowDeliveryWorks::class, 'updateImages'])->name('howDeliveryWorksImage.update');

Route::get('/pickupInstructions', [PickupInstructions::class, 'index'])->name('pickupInstructions');
Route::post('/pickupInstructions/update', [PickupInstructions::class, 'pickupInstructionsUpdate'])->name('pickupInstructionsUpdate');
Route::post('/pickupInstructionsImage/update', [PickupInstructions::class, 'updateImages'])->name('pickupInstructionsImage.update');

Route::get('/stayConnectedWithBulksail', [StayConnectedWithBulksail::class, 'index'])->name('stayConnectedWithBulksail');
Route::post('/stayConnectedWithBulksail/update', [StayConnectedWithBulksail::class, 'stayConnectedUpdate'])->name('stayConnectedUpdate');

Route::get('/howWorksTitle', [HowWorkTitle::class, 'index'])->name('howWorksTitle');
Route::post('/howWorksTitle/update', [HowWorkTitle::class, 'howWorksTitleUpdate'])->name('howWorksTitleUpdate');
