<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PengaduansController;
use App\Http\Controllers\LoginsController;

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

/*
    =============================
    =       ROUTES USER         =
    =============================
*/

// Routes Profil Desa
Route::get('/', [PagesController::class, 'home']);
Route::get('/sejarah', [PagesController::class, 'sejarah']);
Route::get('/wilayah', [PagesController::class, 'wilayah']);
Route::get('/peta', [PagesController::class, 'peta']);

// Routes Pemerintah Desa
Route::get('/pemda', [PagesController::class, 'pemda']);
Route::get('/visimisi', [PagesController::class, 'visimisi']);
Route::get('/bpd', [PagesController::class, 'bpd']);

// Routes Lembaga Masyarakat
Route::get('/lem', [PagesController::class, 'lem']);
Route::get('/lpm', [PagesController::class, 'lpm']);
Route::get('/karangtaruna', [PagesController::class, 'karangtaruna']);
Route::get('/pkk', [PagesController::class, 'pkk']);

// Routes Data Desa
Route::get('/dapen', [PagesController::class, 'pendidikan']);
Route::get('/dapek', [PagesController::class, 'pekerjaan']);
Route::get('/dajen', [PagesController::class, 'jenkel']);
Route::get('/daper', [PagesController::class, 'perkawinan']);

// Routes Pengaduan
Route::get('/pengaduan', [PengaduansController::class, 'index']);

/*
    ==============================
    =       ROUTES ADMIN         =
    ==============================
*/

Auth::routes();

// Routes Login Admin/Operator Desa
Route::get('/login', [LoginsController::class, 'index']);

// Routes Admin
Route::get('/dashboard', [PagesController::class, 'admin']);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');