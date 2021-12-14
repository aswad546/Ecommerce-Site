<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\TransactionController;
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


//Route::get('/shopping-cart',function(){
//    return view('shopping-cart');
//});

Route::get('/product-detail/{id}',[ShopController::class, 'showProductDetail'])->name('shop.product.detail');


Route::get('/admin-dashboard', [AdminController::class, 'adminDash'])->name('admin.dash');
Route::get('/vendor-list', [AdminController::class, 'venList'])->name('ven.list');
Route::get('/users-list', [AdminController::class, 'useList'])->name('use.list');
#Route::get('/add-vendor', [VendorController::class, 'addVendor'])->name('add.vendor');

Route::get('/add-vendor',[AdminController::class, 'showVendorForm'])->name('add.vendor');
Route::post('/add-vendor/save', [AdminController::class, 'addVendorSave'])->name('add.vendor.save');
Route::post('/add-block', [AdminController::class, 'addBlock'])->name('add.vendor.block');

Route::get('/view-wallet',[WalletController::class, 'showWallet'])->name('show.wallet');

Route::get('/vendor-products/discounts',[VendorController::class, 'showDiscount'])->name('show.discount');
Route::get('/vendor-products/discounts/edit/{id}',[VendorController::class, 'editDiscount'])->name('edit.discount');
Route::post('/vendor-products/discounts/edit/{id}/save', [VendorController::class, 'editDiscountSave'])->name('edit.discount.save');
Route::get('/vendor-products/discounts/remove/{id}', [VendorController::class, 'removeDiscount'])->name('remove.discount');
Route::post('/vendor-products/discounts-add/save', [VendorController::class, 'saveDiscount'])->name('add.discount.save');
Route::get('/vendor-products/discounts-add',function(){
    return view('add-discount');
});





Route::post('/product-detail/save/{id}',[FeedbackController::class, 'saveFeedback'])->name('feedback.save');


Route::post('/cart-wallet', [WalletController::class, 'useWallet'])->name('use.wallet');


Route::get('/shopping-cart', [CartController::class, 'showCart'])->name('show.cart');
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('add.cart');
Route::post('/product-detail/{id}/save',[CartController::class, 'addCart'])->name('add.cart.save');
Route::post('/cart-promo-code', [CartController::class, 'applyPromocode'])->name('apply.promo.code');
Route::get('/cart/checkout', [CartController::class, 'checkoutPage'])->name('checkout.page');
Route::post('/cart/checkout/order-confirm', [CartController::class, 'confirmOrder'])->name('confirm.order');

Route::get('/transaction-history/view', [TransactionController::class, 'showTransactions'])->name('show.transaction.history');
Route::get('/transaction-history/view/{id}/show-items', [TransactionController::class, 'showTransactionItems'])->name('show.transaction.items');
Route::get('/transaction-history/export', [VendorController::class, 'exportAllTransactions'])->name('transaction.history.export');

Route::get('/transaction-history/vendor/view', [TransactionController::class, 'showVendorTransactions'])->name('show.vendor.transactions');

Route::get('/orders/view', [UserController::class, 'showOrders'])->name('show.orders');
Route::get('/orders/view/{id}/products', [UserController::class, 'showOrderProducts'])->name('show.orders.products');
Route::get('/orders/view/{id}/cancel', [UserController::class, 'cancelOrder'])->name('cancel.order');


Route::get('/forgot-password/email-form', [UserController::class, 'showEmailForm'])->name('forgot.password.email.form.show');
Route::post('/forgot-password/security-question',[UserController::class, 'showSecurityQuestionForm'])->name('forgot.password.security.question.show');
Route::post('/forgot-password/security-answer-check/{id}', [UserController::class, 'checkSecurityAnswer'])->name('forgot.password.check.security.answer');
Route::get('/forgot-password/re-enter-password/{id}', [UserController::class, 'reenterPassword'])->name('forgot.password.reenter');
Route::post('/forgot-password/update-password/{id}', [UserController::class, 'updatePassword'])->name('forgot.password.update');
