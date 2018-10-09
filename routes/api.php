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

Route::post('auth/login', 'ApiAuthController@login');
Route::post('auth/register', 'ApiAuthController@register');
Route::get('permohonan/{nokp}', 'PermohonanController@semak');

Route::middleware('auth:api')->group(function () {
    Route::get('user/{nokp}', 'UserController@profile');
    Route::get('pelajar/{nokp}', 'PelajarController@index');
    Route::post('pelajar/mail', 'PelajarController@basic_email');
    //Route::post('posts', 'PostController@store');
});

