<?php

use App\Mail\VerificationMail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('test', function (){
//    $data = [
//        'name' => 'Tushar',
//        'verification_code' => 'feefefelwhrw3rnn'
//    ];
//    Mail::to('tushar.khan0122@gmail.com')->send(new VerificationMail($data));
   // return view('admin.vendor.productCapacity.create');
});

Route::get('/con',function(){
    return view('pages.shop');
});

Route::get('/',  'WelcomeController@index')->name('home');
Route::post('layouts/', 'Users\NavbarController@store')->name('pages.search');
Route::get('checkout', 'Users\CheckoutController@index')->middleware(['auth'])->name('checkout');
Route::post('checkout', 'Users\CheckoutController@checkout')->name('checkout.final');
Route::get('checkoutconfirm', 'Users\CheckoutController@checkoutConfirm')->name('checkout.confirm');
Route::get('/addWishList/{id}', 'WelcomeController@addWishList')->name('add.wish.list')->middleware(['auth:web']);
Route::get('/addExpressList/{id}', 'WelcomeController@addExpressList')->name('add.express.list');
Route::get('contact', 'Users\ContactController@employeeContact')->name('contact.show');

//vendor page show
Route::get('vendor', 'Users\VendorProductsController@topSale')->name('topSale.show');


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
    Route::get('allOrders/{id}', 'Users\Admin\OrderController@allOrders')->name('orders.allOrders');

    // change Status
    Route::post('change', 'Users\Admin\BrandController@change')->name('brand.change.status');
    Route::post('categoryChange', 'Users\Admin\CategoryController@change')->name('category.change.status');
    Route::post('subcategoryChange', 'Users\Admin\SubCategoryController@change')->name('subcategory.change.status');
    Route::post('productChange', 'Users\Admin\ProductController@change')->name('product.change.status');
    Route::post('employeeChange', 'Users\Admin\EmployeeController@change')->name('employee.change.status');

    Route::name('admin.all.')->prefix('allvendor')->group(function (){
        Route::get('product', 'Users\Admin\ProductController@allProduct')->name('product');
        Route::get('brand', 'Users\Admin\BrandController@allBrand')->name('brand');
        Route::get('coupon', 'Users\Admin\CouponController@allCoupon')->name('coupon');
        Route::get('category', 'Users\Admin\CategoryController@allCategory')->name('category');
        Route::get('subcategory', 'Users\Admin\SubCategoryController@allSubCategory')->name('subcategory');
        Route::get('productimage', 'Users\Admin\ProductImageController@allProductImages')->name('product.image');
        Route::get('productvideo', 'Users\Admin\ProductVideoController@allProductVideo')->name('product.video');
        Route::get('user', 'Users\Admin\UserController@allUser')->name('user.no.order');
    });
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
    Route::resource('designation', 'Users\Admin\DesignationController');
    Route::resource('employee', 'Users\Admin\EmployeeController');

    Route::get('users', 'Users\Admin\UserController@index')->name('admin.all.users');
    Route::get('change/{user}/{currentStatus}', 'Users\Admin\UserController@changeStatus')->name('admin.all.users.change.status');

    // vendor routes
    Route::prefix('vendor')->group(function(){
        Route::resource('productCapacity', 'Users\Vendor\ProductCapacityController');
        Route::resource('productCertification', 'Users\Vendor\ProductCertificationController');
        Route::resource('productQuality', 'Users\Vendor\ProductQualityController');
        Route::resource('productRnD', 'Users\Vendor\ProductRnDController');
        Route::resource('tradeCapacity', 'Users\Vendor\ProductTradeCapacityController');
        Route::resource('factoryInspection', 'Users\Vendor\ProductFactoryInspectionController');
    });
});
