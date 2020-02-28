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


Route::post('login','APILoginController@login');

// users is a route protected by jwt
Route::middleware('jwt.auth')->get('users', function () {
    return auth('api')->user();
});

// this is a resource
Route::resource('category', 'CategoryController');

//Route::get('/', function () {
//    return view('index');
//});

