<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',  'WelcomeController@index')->name('home');
//Route::get('/',  'WelcomeController@show')->name('pages.show');

Route::prefix('pages')->group(function(){
    Route::get('/{product}', 'WelcomeController@show')->name('pages.show');
    Route::post('/', 'Users\CartController@store')->name('pages.cart');
    Route::DELETE('/{id}', 'Users\CartController@destroy')->name('pages.destroy');

});


//User Auth
Auth::routes();


// Admin routes
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
});

