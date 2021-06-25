<?php

use GuzzleHttp\Middleware;
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


Route::get('/', function () {
    return redirect('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth','CartNotEmpty'])->group(function () {

    Route::resource('checkOut', 'CheckController');

    Route::post('/billing', 'BillingController@placeOrder');

});

Route::middleware(['auth'])->group(function () {

    Route::resource('cart', 'CartController');

    Route::resource('favorite', 'FavoriteController');

    Route::resource('address', 'AddressController');

    Route::get('profile', 'ProfileController@index');

    Route::get('profileEdit', 'ProfileController@edit');

    Route::post('profileUpdate', 'ProfileController@update');

    //return 
    Route::resource('user', 'UserController');

    Route::resource('order', 'OrderController');

    Route::resource('product', 'ProductController');

    Route::resource('offer', 'OfferController');

});

Route::view('/admin', 'dashboard/adminDashboard/dashboard');



