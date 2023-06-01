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
use App\Http\Controllers\Toko\KategoriController;
use App\Http\Controllers\Toko\Produk1Controller;
use App\Http\Controllers\Toko\PenggunaController;
use App\Http\Controllers\Toko\SliderController;
use App\Http\Controllers\Toko\GrupController;
use App\Http\Controllers\DashboardController;


// Route::middleware(['auth',])->group(function () {
//Kategori
Route::get('kategori', [KategoriController::class, 'index'])->middleware(['auth','admin-staff']);
Route::get('kategori/create', [KategoriController::class, 'create'])->middleware(['admin']);
Route::post('kategori/store', [KategoriController::class, 'store'])->name('kategori.store')->middleware(['admin']);
Route::get('kategori/{id}/edit', [KategoriController::class, 'edit'])->middleware(['admin']);
Route::put('kategori/{id}', [KategoriController::class, 'update'])->middleware(['admin']);
Route::delete('kategori/{id}', [KategoriController::class, 'destroy'])->middleware(['admin']);

//Produk
Route::get('produks', [Produk1Controller::class, 'index'])->middleware(['auth','admin-staff']);
Route::get('produks/create', [Produk1Controller::class, 'create'])->middleware(['admin']);
Route::post('produks/store', [Produk1Controller::class, 'store'])->name('produk.store');
Route::get('produks/{id}/edit', [Produk1Controller::class, 'edit'])->middleware(['admin']);
Route::put('produks/{id}', [Produk1Controller::class, 'update'])->middleware(['admin']);
Route::delete('produks/{id}', [Produk1Controller::class, 'destroy'])->middleware(['admin']);

//Pengguna
Route::get('pengguna', [PenggunaController::class, 'index'])->middleware(['auth','admin-staff']);
Route::get('pengguna/create', [PenggunaController::class, 'create'])->middleware(['admin']);
Route::post('pengguna/store', [PenggunaController::class, 'store'])->name('pengguna.store')->middleware(['admin']);
Route::get('pengguna/{id}/edit', [PenggunaController::class, 'edit'])->middleware(['admin']);
Route::put('pengguna/{id}', [PenggunaController::class, 'update'])->middleware(['admin']);
Route::delete('pengguna/{id}', [PenggunaController::class, 'destroy'])->middleware(['admin']);

//Slider
Route::get('slider', [SliderController::class, 'index'])->middleware(['auth','admin-staff']);
Route::get('slider/create', [SliderController::class, 'create'])->middleware(['admin']);
Route::post('slider/store', [SliderController::class, 'store'])->name('slider.store')->middleware(['admin']);
Route::get('slider/{id}/edit', [SliderController::class, 'edit'])->middleware(['admin']);
Route::put('slider/{id}', [SliderController::class, 'update'])->middleware(['admin']);
Route::delete('slider/{id}', [SliderController::class, 'destroy'])->middleware(['admin']);

//Grup
Route::get('grup', [GrupController::class, 'index'])->middleware(['auth','admin-staff']);
Route::get('grup/create', [GrupController::class, 'create'])->middleware(['admin']);
Route::post('grup/store', [GrupController::class, 'store'])->name('grup.store')->middleware(['admin']);
Route::get('grup/{id}/edit', [GrupController::class, 'edit'])->middleware(['admin']);
Route::put('grup/{id}', [GrupController::class, 'update'])->middleware(['admin']);
Route::delete('grup/{id}', [GrupController::class, 'destroy'])->middleware(['admin']);

//Dashboard
Route::get('dashboard', [DashboardController::class, 'index'])->middleware(['auth','admin-staff']);
// });

//Test
Route::get('/test', [ProdukController::class, 'index']);

// Landing Page
use App\Http\Controllers\landing\LandingController;

Route::get('landingpage', [LandingController::class, 'index'])->name('landingpage');
Route::get('landingpage/product', [LandingController::class, 'product'])->name('product');

// Login
use App\Http\Controllers\landing\LoginController;

Route::get('login', [LoginController::class, 'index'])->name('login')->middleware(['guest']);
Route::get('register', [LoginController::class, 'register'])->name('register')->middleware(['guest']);
Route::post('register/store', [LoginController::class, 'store'])->name('register.store');
Route::post('proses', [LoginController::class, 'proses'])->name('proses')->middleware(['guest']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout')->middleware(['auth']);

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
