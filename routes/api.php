<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\PassportController;


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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// My Routes
Route::apiResource('/products', ProductController::class);

// Reviews routes must be /product/11/reviews
Route::group(['prefix'=>'products'], function(){
    Route::apiResource('/{product}/reviews', ReviewController::class);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    //return $request->user;
    return auth()->user();
});

Route::post('register', [PassportController::class, 'register']);
Route::post('login', [PassportController::class, 'login']);

// put all api protected routes here
// Route::middleware('auth:api')->group(function () {
//     Route::post('user-detail', [PassportController::class, 'userDetail']);
//     Route::post('logout', [PassportController::class, 'logout']);
// });