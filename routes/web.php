<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

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
//Landing Page
Route::get('/', [ProdukController::class, 'index']);

//Dashboard
use App\Http\Controllers\DashboardController;
Route::get('/dashboard', [DashboardController::class, 'index']);

//Add
use App\Http\Controllers\UserController;
Route::get('/add', [UserController::class, 'create']);

//Index
use App\Http\Controllers\IndexController;
Route::get('/index', [IndexController::class, 'index']);

//Edit
use App\Http\Controllers\EditController;
// Route to display the edit form
Route::get('edit/{id}', [EditController::class, 'show']);
// Route to handle the form submission and update the data
Route::post('update', [EditController::class, 'update']);

//Kategori
use App\Http\Controllers\Toko\KategoriController;
Route::get('kategori', [KategoriController::class, 'index']);
Route::get('kategori/create', [KategoriController::class, 'create']);
Route::post('kategori/store', [KategoriController::class, 'store'])->name('kategori.store');
Route::get('kategori/{id}/edit', [KategoriController::class, 'edit']);
Route::put('kategori/{id}', [KategoriController::class, 'update']);
Route::delete('kategori/{id}', [KategoriController::class, 'destroy']);

//Produk
use App\Http\Controllers\Toko\Produk1Controller;
Route::get('produks', [Produk1Controller::class, 'index']);
Route::get('produks/create', [Produk1Controller::class, 'create']);
Route::post('produks/store', [Produk1Controller::class, 'store'])->name('produk.store');
Route::get('produks/{id}/edit', [Produk1Controller::class, 'edit']);
Route::put('produks/{id}', [Produk1Controller::class, 'update']);
Route::delete('produks/{id}', [Produk1Controller::class, 'destroy']);

//Pengguna
use App\Http\Controllers\Toko\PenggunaController;
Route::get('pengguna', [PenggunaController::class, 'index']);
Route::get('pengguna/create', [PenggunaController::class, 'create']);
Route::post('pengguna/store', [PenggunaController::class, 'store'])->name('pengguna.store');
Route::get('pengguna/{id}/edit', [PenggunaController::class, 'edit']);
Route::put('pengguna/{id}', [PenggunaController::class, 'update']);
Route::delete('pengguna/{id}', [PenggunaController::class, 'destroy']);

//Slider
use App\Http\Controllers\Toko\SliderController;
Route::get('slider', [SliderController::class, 'index']);
Route::get('slider/create', [SliderController::class, 'create']);
Route::post('slider/store', [SliderController::class, 'store'])->name('slider.store');
Route::get('slider/{id}/edit', [SliderController::class, 'edit']);
Route::put('slider/{id}', [SliderController::class, 'update']);
Route::delete('slider/{id}', [SliderController::class, 'destroy']);

//Grup
use App\Http\Controllers\Toko\GrupController;
Route::get('grup', [GrupController::class, 'index']);
Route::get('grup/create', [GrupController::class, 'create']);
Route::post('grup/store', [GrupController::class, 'store'])->name('grup.store');
Route::get('grup/{id}/edit', [GrupController::class, 'edit']);
Route::put('grup/{id}', [GrupController::class, 'update']);
Route::delete('grup/{id}', [GrupController::class, 'destroy']);













