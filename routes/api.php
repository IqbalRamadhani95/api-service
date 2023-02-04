<?php

use App\Http\Controllers\API\orderController;
use App\Http\Controllers\API\orderItemController;
use App\Http\Controllers\API\produkController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\tesController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/tesproduk', [produkController::class, 'index']);
Route::get('/detailProduk/{id}', [produkController::class, 'detailProduct']);
Route::get('/kategoriProduk/{id}', [kategoriController::class, 'kategoriProduct']);

Route::post('/orders', [orderController::class,'store']);
Route::post('/orderItem', [orderItemController::class,'store']);
Route::get('/filterOrder/{bulan}', [orderController::class,'filterMonth']);

Route::controller(AuthController::class)->group(function() {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
    Route::get('me', 'me');
});

