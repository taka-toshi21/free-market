<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarketController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MarketController::class, 'market']);
Route::get('/register', [MarketController::class, 'register']);
Route::get('/login', [MarketController::class, 'login']);
Route::get('/mypage', [MarketController::class, 'mypage'])->middleware('auth');
Route::get('/mypage/profile', [MarketController::class, 'profile'])->middleware('auth')->name('profile');
Route::post('/mypage/profile', [MarketController::class, 'update']);
Route::get('/sell', [MarketController::class, 'sell']);
Route::post('/sell', [MarketController::class, 'store']);
Route::get('/item/{item_id}', [MarketController::class, 'detail'])->name('itemDetail');
Route::get('/purchase/{item_id}', [MarketController::class, 'purchase'])->name('purchase');
Route::post('/purchase/{item_id}', [MarketController::class, 'buy']);
Route::get('/purchase/address/{item_id}', [MarketController::class, 'address'])->name('address');
Route::post('/purchase/address/{item_id}', [MarketController::class, 'destination']);