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


Route::get('/home','homepageController@index');
Route::get('/','homepageController@index');

// Route::get('/', 'loginController@index');
// Route::post('/', 'loginController@login');
// Route::get('/login', 'loginController@index');
// Route::post('/login', 'loginController@login');
// Route::get('/createaccount', 'loginController@createaccountIndex');
// Route::post('/createaccount', 'loginController@createaccount');
// // });
// Route::group(['middleware' => 'usersession'], function () {
// Route::get('/', 'homeController@Index');
// Route::get('/home', 'homeController@Index');
// Route::get('/logout', 'homeController@logout');
// Route::get('/topup', 'homeController@topupindex');
// Route::post('/topup', 'homeController@topup');
// });
