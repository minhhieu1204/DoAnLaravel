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
route::apiResource('baiviet','Api\NewsController')->only(['index']);
route::apiResource('user','Api\UserController')->only(['index']);
route::apiResource('chuyenmuc','Api\TypeController')->only(['index']);