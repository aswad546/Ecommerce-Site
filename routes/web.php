<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendorController;
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

Route::get('/shopping-cart',function(){
    return view('shopping-cart');
});

Route::get('/product-detail',function(){
    return view('product-detail');
});

Route::get('/homepage',function(){
    return view('homepage');
});

