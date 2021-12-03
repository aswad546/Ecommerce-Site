<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\WalletController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomePageController::class, 'index'])->name('home');
Route::get('/edit-profile', [UserController::class, 'showEditPage'])->name('edit.profile');
Route::post('/edit-profile/save', [UserController::class, 'editUser'])->name('edit.profile.save');
//Auth Routes
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/upgrade-account', [UserController::class, 'upgradeAccount'])->name('upgrade.account');

Route::get('/vendor-products', [VendorController::class, 'showProducts'])->name('show.products');
Route::get('/vendor-products/add', [VendorController::class, 'addProduct'])->name('add.product');
Route::post('/vendor-products/add/save', [VendorController::class, 'createProduct'])->name('add.product.save');
Route::get('/vendor-products/edit/{id}', [VendorController::class, 'editProduct'])->name('edit.product');
Route::post('/vendor-products/edit/{id}/save', [VendorController::class, 'saveProduct'])->name('edit.product.save');
Route::get('/vendor-products/remove/{id}', [VendorController::class, 'removeProducts'])->name('remove.products');

Route::get('/shop/tops', [ShopController::class, 'showTops'])->name('shop.tops');
Route::get('/shop/bottoms', [ShopController::class, 'showBottoms'])->name('shop.bottoms');
Route::get('/shop/shoes', [ShopController::class, 'showShoes'])->name('shop.shoes');

Route::post('/search-products', [ShopController::class, 'searchProducts'])->name('search.products');

Route::get('/shopping-cart',function(){
    return view('shopping-cart');
});

Route::get('/product-detail/{id}',[ShopController::class, 'showProductDetail'])->name('shop.product.detail');

Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('add.cart');

Route::get('/admin-dashboard', [AdminController::class, 'adminDash'])->name('admin.dash');
Route::get('/vendor-list', [AdminController::class, 'venList'])->name('ven.list');
Route::get('/users-list', [AdminController::class, 'useList'])->name('use.list');
#Route::get('/add-vendor', [VendorController::class, 'addVendor'])->name('add.vendor');

Route::get('/add-vendor',function(){
    return view('add-vendor');
});
Route::post('/add-vendor/save', [AdminController::class, 'addVendorSave'])->name('add.vendor.save');
Route::post('/add-block', [AdminController::class, 'addVendorBlock'])->name('add.vendor.block');

Route::get('/view-wallet',[WalletController::class, 'showWallet'])->name('show.wallet');

Route::get('/vendor-products/discounts',[VendorController::class, 'showDiscount'])->name('show.discount');
Route::get('/vendor-products/discounts/edit/{id}',[VendorController::class, 'editDiscount'])->name('edit.discount');
Route::post('/vendor-products/discounts/edit/{id}/save', [VendorController::class, 'editDiscountSave'])->name('edit.discount.save');
Route::get('/vendor-products/discounts/remove/{id}', [VendorController::class, 'removeDiscount'])->name('remove.discount');


Route::get('/vendor-products/discounts-add',function(){
    return view('add-discount');
});
Route::post('/vendor-products/discounts-add/save', [VendorController::class, 'saveDiscount'])->name('add.discount.save');


Route::post('/product-detail/save/{id}',[FeedbackController::class, 'saveFeedback'])->name('feedback.save');
