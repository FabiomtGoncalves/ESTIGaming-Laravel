<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\GameController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
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

Route::get('game/{id}', [GameController::class, 'getGameAPI']);
Route::get('games', [GameController::class, 'getGamesAPI']);
Route::get('search', [GameController::class, 'searchGamesAPI']);
Route::get('sale', [GameController::class, 'getSaleAPI']);
Route::get('filter', [GameController::class, 'filterGamesAPI']);

Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::get('cart', [CartController::class, 'getCartAPI']);
    Route::get('account', [AccountController::class, 'accountAPI']);
    Route::post('logout', [AuthController::class, 'logoutAPI']);
    Route::post('addToCart', [CartController::class, 'addToCartAPI']);
    Route::delete('cart/deleteFromCart/{id}', [CartController::class, 'deleteFromCartAPI']);
    Route::post('cart/buy', [CartController::class, 'buyAPI']);
});

Route::post('login', [AuthController::class, 'signinAPI']);
Route::post('register', [AuthController::class, 'signupAPI']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
