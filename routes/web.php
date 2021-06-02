<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

// Routes Profil Desa
Route::get('/', [PagesController::class, 'home']);
Route::get('/sejarah', [PagesController::class, 'sejarah']);
Route::get('/wilayah', [PagesController::class, 'wilayah']);
Route::get('/peta', [PagesController::class, 'peta']);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/login', [App\Http\Controllers::class, 'login'])->name('login');