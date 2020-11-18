<?php

use Illuminate\Support\Facades\Route;

Route::get('/',  'WelcomeController@index')->name('home');
//Route::DELETE('layouts/frontend_main_menu/{id}', 'Users\CartController@destroy')->name('cart.destroy');
//Route::get('/',  'WelcomeController@show')->name('pages.show');

Route::prefix('pages')->group(function(){
    Route::get('/{product}', 'WelcomeController@show')->name('pages.show');
    Route::post('/', 'Users\CartController@store')->name('pages.cart');
    Route::get('/', 'Users\CartController@create')->name('cart.create');
    Route::put('/{id}', 'Users\CartController@update')->name('cart.update');
    Route::delete('/{id}', 'Users\CartController@destroy')->name('cart.destroy');
    Route::get('delete/{id}', 'Users\CartController@show')->name('cart.show');
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

