<?php

use App\Http\Controllers\Api\Produk1Controller;
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

Route::get('produks', [Produk1Controller::class, 'index']);
Route::post('produks/store', [Produk1Controller::class, 'store'])->name('produk.store');
Route::put('produks/{id}', [Produk1Controller::class, 'update']);
// Route::apiResource('produks', Produk1Controller::class);
Route::delete('produks/{id}', [Produk1Controller::class, 'destroy']);
