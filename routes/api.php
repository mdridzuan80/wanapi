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
Route::get('jobmalaysia', 'PermohonanController@jobmalaysia');
Route::get('laluankerjaya', 'PermohonanController@jobmalaysia');
Route::get('senaraiilp/{negeri}', 'PermohonanController@senilp');
Route::post('pelajar/mail', 'PelajarController@basic_email');
Route::get('pelajar/{nokp}', 'PelajarController@index');
Route::get('kursus/{ilp}', 'PelajarController@kursus');

Route::middleware('auth:api')->group(function () {
    Route::get('user/{nokp}', 'UserController@profile');
});

