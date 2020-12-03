<?php

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

//Route::get('test', function (){
//    return Product::where(['id'=> 1])
//        ->select('admin_id')->first()->admin_id;
//});

Route::get('/',  'WelcomeController@index')->name('home');
Route::post('layouts/', 'Users\NavbarController@store')->name('pages.search');
Route::get('checkout', 'Users\CheckoutController@index')->middleware(['auth'])->name('checkout');
Route::post('checkout', 'Users\CheckoutController@checkout')->name('checkout.final');
Route::get('checkoutconfirm', 'Users\CheckoutController@checkoutConfirm')->name('checkout.confirm');

Route::prefix('pages')->group(function(){
    Route::get('/{product}', 'WelcomeController@show')->name('pages.show');
    Route::post('/', 'Users\CartController@store')->middleware(['auth'])->name('pages.cart');
    Route::get('/', 'Users\CartController@create')->middleware(['auth'])->name('cart.create');
    Route::put('/', 'Users\CartController@update')->middleware(['auth'])->name('cart.update');
    Route::delete('/{id}', 'Users\CartController@destroy')->middleware(['auth'])->name('cart.destroy');
    Route::get('delete/{id}', 'Users\CartController@show')->middleware(['auth'])->name('cart.show');
    Route::get('subcategory/{id}', 'Users\NavbarController@show')->name('subcat.show');
    Route::get('category/{id}', 'WelcomeController@category')->name('cat.show');
});


//User Auth
Auth::routes();
Route::get('/email/verify', function () {
    return view('auth.verify');
})->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('status', 'verification-link-sent');
})->middleware(['auth', 'throttle:6,1'])->name('verification.resend');


Route::get('verify', 'Auth\RegisterController@verify')->name('verify.mail');


// Admin Auth routes
Route::prefix('admin')->group(function(){
    Route::get('/', 'Users\Admin\AdminController@index')->name('admin.dashboard');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/register', 'Auth\AdminRegisterController@showRegisterForm')->name('admin.register');
    Route::post('/register', 'Auth\AdminRegisterController@register')->name('admin.register.submit');
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});


Route::prefix('admin')->group(function(){
    Route::resource('category', 'Users\Admin\CategoryController');
    Route::resource('subcategory', 'Users\Admin\SubCategoryController');
    Route::resource('brand', 'Users\Admin\BrandController');
    Route::resource('product', 'Users\Admin\ProductController');
    Route::resource('productImage', 'Users\Admin\ProductImageController');
    Route::resource('productVideo', 'Users\Admin\ProductVideoController');
    Route::resource('coupon', 'Users\Admin\CouponController');
    Route::resource('orders', 'Users\Admin\OrderController');
});
