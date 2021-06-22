<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BotManController;
use App\Http\Controllers\SubOrderController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\ComplainController;
use App\Http\Controllers\AttributeController;
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
    Route::get('/order/pay/{suborder}', [SubOrderController::class,'pay'])->name('order.pay');
    Route::get('/product/attribute',[AttributeController::class,'view'])->name('admin.product.attribute.view');
    Route::get('/product/attribute/{product}',[AttributeController::class,'add'])->name('admin.product.attribute.add');
  
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


Route::get('/products/searchbyprice', [ProductController::class,'searchbyprice'])->name('products.search.price');

Route::resource('products', ProductController::class);

Route::group(['prefix' => 'seller', 'middleware' => 'auth', 'as' => 'seller.', 'namespace' => 'Seller'], function () {

    // Route::redirect('/','seller/orders');

    // Route::resource('/orders',  'OrderController');

    // Route::get('/orders/delivered/{suborder}',  [OrderController::class,'markDelivered'])->name('order.delivered');
});
Route::get('/invoicepdf',function(){
    // $html = '<h1>hello pdf</h1>';
    // $pdf = PDF::loadHtml($html);
    // return $pdf->stream('invoice.pdf');
//     $cartitems=\Cart::session(auth()->id())->getContent();
//      $pdf = PDF::loadView('cart.index',$cartitems);
//  return $pdf->stream('invoice.pdf');
// $cartitems=\Cart::session(auth()->id())->getContent();
// $pdf = PDF::loadView('pdf.invoice', $cartitems);
// return $pdf->download('invoice.pdf');
});
Route::get('/exportuser',[ExportController::class,'exportuser']);

Route::get('/test', function () {
    event(new App\Events\OrderPlaced('Someone'));
    
    return "Event has been sent!";
});
Route::get('/event',function(){
 event(new App\Events\OrderCompleted('how are you'));
});

Route::get('/complain',[ComplainController::class,'open']);
Route::post('/complain',[ComplainController::class,'add'])->name('complain.store');

Route::post('/product/attribute/store',[AttributeController::class,'store1'])->name('product.attribute.store');

Route::get('/leaflet',function(){
    return view('leaflet');
});

Route::get('/leafletinput',function(){
    return view('leafletinput');
});