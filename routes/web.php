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

//Dashboard
use App\Http\Controllers\DashboardController;
Route::get('/dashboard', [DashboardController::class, 'index']);










