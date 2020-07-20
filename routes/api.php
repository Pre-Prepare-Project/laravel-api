<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('login', 'Api\UserController@login');
Route::post('register', 'Api\UserController@register');
//    Route::get('users/{id}','Api\UserController@userInstance');
//    Route::get('users','Api\UserController@userList');
 Route::post('forgot_password','Api\UserController@forgotPassword');
// authenticated Api
Route::group(['middleware' => 'auth:api'], function(){
    Route::post('details', 'Api\UserController@details');
    Route::post('logout', 'Api\UserController@logout');
    Route::get('users','Api\UserController@userList');
    Route::get('users/{id}','Api\UserController@userInstance');
//     Route::post('forgot_password','Api\UserController@forgotPassword');
    Route::post('change_password','Api\UserController@changePassword');

});


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
