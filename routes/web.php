<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'FrontController@index');
Route::get('/member', 'FrontController@member');

Route::prefix('shopping-cart')->group(function () {

    Route::get('/cart-1', 'FrontController@cart_1');
    Route::middleware(['shopping'])->group(function () {
        Route::get('/cart-2', 'FrontController@cart_2');
        Route::post('/cart-2/check', 'FrontController@paymentCheck');
        Route::get('/cart-3', 'FrontController@cart_3');
        Route::post('/cart-3/check', 'FrontController@shipmentCheck');
    });
    Route::get('/cart-4', 'FrontController@cart_4');

    Route::POST('add', 'FrontController@add');
    Route::POST('update', 'FrontController@update');
    Route::post('delete', 'FrontController@delete');
    Route::get('content', 'FrontController@content');
    Route::get('clear', 'FrontController@clear');
});


Route::get('contact_us', 'FrontController@contactUs');
Route::post('/contactus/send', 'FrontController@contactusSend');
Route::get('product', 'FrontController@product');
Route::get('news', 'FrontController@news');

// middleware('auth')確認是否是登入狀態
Route::middleware('auth', 'admin')->prefix('admin')->group(function () {
    // 群組相同有相同 admin 的 Route
    Route::get('/', 'HomeController@index')->name('home');

    Route::prefix('news')->group(function () {
        Route::get('/', 'NewsController@index');
        Route::get('/create', 'NewsController@create');
        Route::post('/store', 'NewsController@store');
        Route::get('/edit/{id}', 'NewsController@edit');
        Route::post('/update/{id}', 'NewsController@update');
        Route::delete('/delete/{id}', 'NewsController@delete');
    });


    Route::prefix('product')->group(function () {
        Route::prefix('type')->group(function () {
            Route::get('/', 'ProductTypeController@index');
            Route::get('/add', 'ProductTypeController@add');
            Route::post('/store', 'ProductTypeController@store');
            Route::get('/edit/{id}', 'ProductTypeController@edit');
            Route::post('/update/{id}', 'ProductTypeController@update');
            Route::delete('/delete/{id}', 'ProductTypeController@delete');
        });
    });

    Route::prefix('product')->group(function () {
        Route::prefix('item')->group(function () {
            Route::get('/', 'ProductController@index');
            Route::get('/add', 'ProductController@add');
            Route::post('/store', 'ProductController@store');
            Route::get('/edit/{id}', 'ProductController@edit');
            Route::post('/update/{id}', 'ProductController@update');
            Route::delete('/delete/{id}', 'ProductController@delete');
            Route::post('/deleteImage', 'ProductController@deleteImage');
        });
    });

    Route::prefix('user')->group(function () {
        Route::get('/', 'UserController@index');
        Route::get('/create', 'UserController@create');
        Route::post('/store', 'UserController@store');
        Route::get('/edit/{id}', 'UserController@edit');
        Route::post('/update/{id}', 'UserController@update');
        Route::delete('/delete/{id}', 'UserController@delete');
    });

    // Route::get('/user', 'UserController@index');
    // Route::get('/user/create', 'UserController@create');
    // Route::post('/user/store', 'UserController@store');
    // Route::get('/user/edit/{id}', 'UserController@edit');
    // Route::post('/user/update/{id}', 'UserController@update');
    // Route::delete('/user/delete/{id}', 'UserController@delete');

    Route::prefix('contact_us')->group(function () {
        Route::get('/', 'ContactUsController@index');
        Route::get('/edit/{id}', 'ContactUsController@edit');
        Route::delete('/delete/{id}', 'ContactUsController@delete');
    });
});


// Route::get('/admin/news', 'NewsController@index');
// Route::get('/admin/product', 'ProductController@index');


// Auth::routes();
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
