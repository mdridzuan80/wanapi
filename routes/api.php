<?php

use App\User;
use Illuminate\Http\Request;
use App\Transformers\UserTransformer;

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

Route::get('/users', function (Request $request) {
    /* $user = fractal(User::all(), new UserTransformer())->toArray(); */
    $user = fractal()
        ->collection(User::get())
        ->transformWith(new UserTransformer())
        ->toArray();

    return response()->json($user);
});

Route::post('users', 'AuthController@register');
