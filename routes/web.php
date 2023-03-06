<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::get('/', [GameController::class, 'index'])->name('home');
Route::get('/game/{id}', [GameController::class, 'game']);
Route::get('/search', [GameController::class, 'search']);
Route::get('/sale', [GameController::class, 'sale']);
Route::get('/filter', [GameController::class, 'filter']);
Route::get('/login', [AccountController::class, 'login'])->name('login');

Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::get('/cart', [CartController::class, 'cart'])->name('cart');
    Route::get('/account', [AccountController::class, 'account'])->name('account');
    Route::post('/cart/buy', [CartController::class, 'buy']);
    Route::post('/game/{id}/addToCart', [CartController::class, 'addToCart']);
    Route::post('/cart/deleteFromCart/{id}', [CartController::class, 'deleteFromCart'])->name('deleteFromCart');
});

Route::post('logout', [AuthController::class, 'logout']);
Route::post('login', [AuthController::class, 'signin']);
Route::post('register', [AuthController::class, 'signup']);
