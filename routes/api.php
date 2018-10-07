<?php

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

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::post('auth/register', 'AuthController@register');
Route::post('auth/login', 'AuthController@login');

Route::post('auth/profile', 'AuthController@profile')->middleware('auth:api');

Route::get('users/{user}', 'UserController@profile')->middleware('auth:api');

Route::post('posts', 'PostController@store')->middleware('auth:api');
