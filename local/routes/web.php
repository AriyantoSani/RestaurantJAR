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

// Admin
Route::get('/transaction','adminController@index');
Route::get('/account','adminController@indexAccount');
Route::post('/account/insert','adminController@insertAccount');
Route::get('/account/{id}/delete','adminController@deleteAccount');
Route::get('/menuMaster','adminController@indexMenuMaster');
Route::post('/menuMaster/insert','adminController@insertMenuMaster');
Route::get('/menuMaster/{id}/delete','adminController@deleteMenuMaster');



Route::get('/', 'homepageController@index');
Route::get('/home', 'homepageController@index');
Route::get('/menu', 'menupageController@index');
Route::get('/about', 'homepageController@indexAbout');
Route::get('/menu', 'homepageController@indexMenu');
Route::get('/gallery', 'homepageController@indexGallery');
Route::get('/table/{id}', 'menupageController@index');
Route::get('table/updateOrder/{id}', 'menupageController@updateOrder');
Route::get('/table/{id}/buy/{item}', 'menupageController@buy');
Route::get('/orderlist/{id}', 'menupageController@indexOrder');
Route::get('/book', 'bookpageController@index');
Route::get('/login', 'loginController@index');
Route::post('/login', 'loginController@login');
Route::post('/table/{id}', 'menupageController@createOrder');
Route::get('orderlist/checkout/{id}/{orderid}', 'menupageController@checkoutOrder');
Route::get('/table/{id}/filter/{category}', 'menupageController@filterindex');
Route::post('/table/{id}/filter/{category}', 'menupageController@createOrder');

Route::get('/logout', 'loginController@logout');

//login Require
Route::group(
    ['middleware' => 'checkuser'],
    function () {
        //Cashier
        Route::get('/homeCashier', 'indexController@indexCashier')->middleware('checkcashier');
        Route::post('/homeCashier', 'foodController@checkoutOrder')->middleware('checkcashier');
        Route::get('/detailCashier/{id}', 'foodController@detailOrderCashier')->middleware('checkcashier');
        Route::get('/printCashier/{id}', 'foodController@printorderCashier')->middleware('checkcashier');
        Route::get('/checkout/{order_id}','foodController@checkout')->middleware('checkcashier');

        Route::get('/home', 'indexController@indexCashier')->middleware('checkcashier');
        //Waiter
        Route::get('/homeWaiter', 'indexController@indexWaiter')->middleware('checkwaiter');
        Route::get('/detail/{id}', 'foodController@detailOrder')->middleware('checkwaiter');
        Route::get('/detail/antar/{id}', 'foodController@antarOrder')->middleware('checkwaiter');
        Route::get('/printWaiter/{id}', 'foodController@printorderWaiter')->middleware('checkwaiter');
        Route::get('/split/{id}', 'foodController@splitOrder')->middleware('checkwaiter');
        Route::post('/split/{id}', 'foodController@splitOrderAction')->middleware('checkwaiter');

        //Kitchen
        Route::get('/homeKitchen', 'indexController@indexKitchen')->middleware('checkkitchen');
        Route::get('/changeStock/{id}', 'foodController@changeStock')->middleware('checkkitchen');

        //Admin
    }
);
