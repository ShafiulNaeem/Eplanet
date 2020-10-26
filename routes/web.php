<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',  'WelcomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Admin routes
Route::prefix('admin')->group(function(){
    Route::get('/', 'Users\Admin\AdminController@index')->name('admin.dashboard');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/register', 'Auth\AdminRegisterController@showRegisterForm')->name('admin.register');
    Route::post('/register', 'Auth\AdminRegisterController@register')->name('admin.register.submit');
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

    Route::get('/brand', 'Users\Admin\BrandController@index')->name('brand.index');
    Route::get('/brand.create', 'Users\Admin\BrandController@create')->name('brand.create');
    Route::post('/brand.store', 'Users\Admin\BrandController@store')->name('brand.store');
    Route::get('/brand.edit{id}','Users\Admin\BrandController@edit')->name('brand.edit');
    Route::post('/brand.update{id}', 'Users\Admin\BrandController@update')->name('brand.update');
    Route::post('/brand-destroy{id}', 'Users\Admin\BrandController@destroy')->name('brand-destroy');

    Route::get('/category', 'Users\Admin\CategoryController@index')->name('category.index');
    Route::get('/category.create', 'Users\Admin\CategoryController@create')->name('category.create');
    Route::post('/category.store', 'Users\Admin\CategoryController@store')->name('category.store');
    Route::get('/category.edit{id}', 'Users\Admin\CategoryController@edit')->name('category.edit');
    Route::post('/category.update{id}', 'Users\Admin\CategoryController@update')->name('category.update');
    Route::post('/category.destroy{id}', 'Users\Admin\CategoryController@destroy')->name('category.destroy');

    Route::get('/copon', 'Users\Admin\CouponController@index')->name('copon.index');
    Route::get('/copon.create', 'Users\Admin\CouponController@create')->name('copon.create');
    Route::post('/copon.store', 'Users\Admin\CouponController@store')->name('copon.store');
    Route::get('/copon.edit{id}', 'Users\Admin\CouponController@edit')->name('copon.edit');
    Route::post('/copon.update{id}', 'Users\Admin\CouponController@update')->name('copon.update');
    Route::post('/copon.destroy{id}', 'Users\Admin\CouponController@destroy')->name('copon.destroy');
    
});

