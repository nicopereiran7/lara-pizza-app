<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\AuthController;

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
// BASIC PAGES
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::view('/puntos', 'puntos')->name('puntos');
Route::view('/locales', 'locales')->name('locales');

Route::post("/productos", [ProductosController::class], 'store')->name('productos.store');

Route::post("/login", [AuthController::class, 'login'])->name('login');
Route::post("/logout", [AuthController::class, 'logout']);

Route::view('/perfil', 'perfil')->middleware('auth')->name('perfil');