<?php

use App\Http\Controllers\ProductController;
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

Route::get('/', [ProductController::class, 'index']);

Route::get('/create-product', [ProductController::class, 'create'])->name('create-product');
Route::post('/create-product', [ProductController::class, 'store'])->name('store-product');
Route::get('/delete-product/{product}', [ProductController::class, 'destroy'])->name('destroy-product');
