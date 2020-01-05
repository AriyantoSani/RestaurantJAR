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


Route::get('/','homepageController@index');
Route::get('/home','homepageController@index');
Route::get('/menu','menupageController@index');
Route::get('/about','homepageController@indexAbout');
Route::get('/gallery','homepageController@indexGallery');
Route::get('/table/{id}','menupageController@index');
Route::get('/table/{id}/buy/{item}','menupageController@buy');
Route::get('/orderlist/{id}','menupageController@indexOrder');
Route::get('/book','bookpageController@index');
Route::get('/login','loginController@index');
Route::post('/login','loginController@login');
//login Require
// Route::group(['middleware'=> 'checkuser'],function(){


// }
