<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\HomeController;
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


Route::get('/', [HomeController::class,'index'])->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::get('/order/pay/{suborder}', 'SubOrderController@pay')->name('order.pay');
});

Route::middleware(['auth'])->get('/home',function(){
    return view('home');
});
Route::middleware(['auth'])->get('/changepassword',function(){
    return view('auth.update-password');
});
Route::middleware(['guest'])->get('/sign-in/github',[SocialiteController::class,'github']);
Route::middleware(['guest'])->get('/sign-in/github/redirect',[SocialiteController::class,'githubRedirect']);

Route::middleware(['guest'])->get('/sign-in/facebook',[SocialiteController::class,'facebook']);
Route::middleware(['guest'])->get('/sign-in/facebook/redirect',[SocialiteController::class,'facebookRedirect']);



Route::middleware(['auth'])->get('/addtocart/{product}',[CartController::class,'add'])->name('cart.add');

Route::middleware(['auth'])->get('/cart',[CartController::class,'index'])->name('cart.index');


Route::middleware(['auth'])->get('/cartdestroy/{itemid}',[CartController::class,'destroy'])->name('cart.destroy');


Route::middleware(['auth'])->get('/cartupdate/{itemid}',[CartController::class,'update'])->name('cart.update');


Route::middleware(['auth'])->get('/cartcheckout',[CartController::class,'checkout'])->name('cart.checkout');

Route::middleware(['auth'])->get('/cart/apply-coupon',[CartController::class,'applyCoupon'])->name('cart.coupon');


Route::resource('orders', OrderController::class)->middleware(['auth']);

Route::resource('shops', ShopController::class)->middleware(['auth']);

Route::middleware(['auth'])->get('/paypal/checkout/{order}',[PayPalController::class,'getExpressCheckout'])->name('paypal.checkout');

Route::middleware(['auth'])->get('/paypal/checkout-success/{order}',[PayPalController::class,'getExpressCheckoutsuccess'])->name('paypal.success');

Route::middleware(['auth'])->get('/paypal/checkout-cancel',[PayPalController::class,'cancelpage'])->name('paypal.cancel');


Route::get('/products/search', [ProductController::class,'search'])->name('products.search');



Route::resource('products', ProductController::class);

Route::group(['prefix' => 'seller', 'middleware' => 'auth', 'as' => 'seller.', 'namespace' => 'Seller'], function () {

    Route::redirect('/','seller/orders');

    Route::resource('/orders',  'OrderController');

    Route::get('/orders/delivered/{suborder}',  'OrderController@markDelivered')->name('order.delivered');
});
