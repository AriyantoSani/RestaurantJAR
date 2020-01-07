<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/account/{id}/editnamadepan','adminController@editnamadepan');
Route::post('/account/{id}/editnamabelakang','adminController@editnamabelakang');
Route::post('/account/{id}/editusername','adminController@editusername');
Route::post('/account/{id}/editpassword','adminController@editpassword');
Route::post('/account/{id}/editemail','adminController@editemail');
Route::post('/account/{id}/editphone','adminController@editphone');
Route::post('/account/{id}/editrole','adminController@editrole');

Route::post('/menuMaster/{id}/editnamacategory','adminController@editnamacategory');

Route::post('/menuMaster/{id}/editnamamenu','adminController@editnamamenu');
Route::post('/menuMaster/{id}/editprice','adminController@editprice');
Route::post('/menuMaster/{id}/editstatus','adminController@editstatus');
Route::post('/menuMaster/{id}/editlink','adminController@editlink');
Route::post('/menuMaster/{id}/editdescription','adminController@editdescription');
Route::post('/menuMaster/{id}/editFoodCat','adminController@editFoodCat');