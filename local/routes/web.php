<?php

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


Route::get('/', 'homepageController@index');
Route::get('/home', 'homepageController@index');
Route::get('/menu', 'menupageController@index');
Route::get('/about', 'homepageController@indexAbout');
Route::get('/gallery', 'homepageController@indexGallery');
Route::get('/table/{id}', 'menupageController@index');
Route::get('/table/{id}/buy/{item}', 'menupageController@buy');
Route::get('/orderlist/{id}', 'menupageController@indexOrder');
Route::get('/book', 'bookpageController@index');
Route::get('/login', 'loginController@index');
Route::post('/login', 'loginController@login');
Route::post('/table/{id}', 'menupageController@createOrder');
Route::get('orderlist/checkout/{id}/{orderid}', 'menupageController@checkoutOrder');
Route::get('/logout', 'loginController@logout');

//login Require
Route::group(
    ['middleware' => 'checkuser'],
    function () {
        //Cashier
        Route::get('/homeCashier', 'indexController@indexCashier')->middleware('checkcashier');
        Route::get('/detailCashier/{id}', 'foodController@detailOrderCashier')->middleware('checkcashier');
        Route::get('/checkout/{order_id}','foodController@checkout')->middleware('checkcashier');

        //Waiter
        Route::get('/homeWaiter', 'indexController@indexWaiter')->middleware('checkwaiter');
        Route::get('/detail/{id}', 'indexController@detailOrder')->middleware('checkwaiter');
        Route::get('/detail/antar/{id}', 'indexController@antarOrder')->middleware('checkwaiter');

        //Kitchen
        Route::get('/homeKitchen', 'indexController@indexKitchen')->middleware('checkkitchen');
        Route::get('/changeStock/{id}', 'foodController@changeStock')->middleware('checkkitchen');

        //Admin
    }
);
