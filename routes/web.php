<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\AnggotaBPDController;
use App\Http\Controllers\KritikSaranController;
use App\Http\Controllers\Auth\LoginController;

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
Route::get('/', [PageController::class, 'home']);
Route::get('/sejarah', [PageController::class, 'sejarah']);
Route::get('/wilayah', [PageController::class, 'wilayah']);
Route::get('/peta', [PageController::class, 'peta']);

// Routes Pemerintah Desa
Route::get('/pemda', [PageController::class, 'pemda']);
Route::get('/visimisi', [PageController::class, 'visimisi']);
Route::get('/bpd', [PageController::class, 'bpd']);

// Routes Data Desa
Route::get('/dapen', [PageController::class, 'pendidikan']);
Route::get('/dapek', [PageController::class, 'pekerjaan']);
Route::get('/dajen', [PageController::class, 'jenkel']);
Route::get('/daper', [PageController::class, 'perkawinan']);

// Routes Pengaduan
Route::get('/pengaduan/create', [PengaduanController::class, 'create']);

/*
    ==============================
    =       ROUTES LOGIN         =
    ==============================
*/

// Routes Login Admin/Operator Desa
Route::get('/login', [LoginController::class, 'showLoginForm']);
Route::post('/login', [LoginController::class, 'authenticate']);

/*
    ==============================
    =       ROUTES ADMIN         =
    ==============================
*/

// Routes Admin
Route::get('/dashboard', [PageController::class, 'admin']);

// Routes Admin mengelola Penduduk
Route::get('/penduduk', [PendudukController::class, 'index']);
Route::get('/penduduk/create', [PendudukController::class, 'create']);
Route::get('/penduduk/{id}/edit', [PendudukController::class, 'edit']);
Route::get('/penduduk/{id}', [PendudukController::class, 'show']);
Route::post('/penduduk', [PendudukController::class, 'store']);
Route::put('/penduduk/{id}', [PendudukController::class, 'update']);
Route::delete('/penduduk/{id}', [PendudukController::class, 'destroy']);

// Routes Admin mengelola Pengguna
Route::get('/pengguna', [PenggunaController::class, 'index']);
Route::get('/pengguna/create', [PenggunaController::class, 'create']);
Route::get('/pengguna/{id}/edit', [PenggunaController::class, 'edit']);
Route::get('/pengguna/{id}', [PenggunaController::class, 'show']);
Route::post('/pengguna', [PenggunaController::class, 'store']);
Route::put('/pengguna/{id}', [PenggunaController::class, 'update']);
Route::delete('/pengguna/{id}', [PenggunaController::class, 'destroy']);

// Routes Admin mengelola Pengaduan
Route::get('/pengaduan', [PengaduanController::class, 'index']);
Route::get('/pengaduan/{id}/edit', [PengaduanController::class, 'edit']);
Route::get('/pengaduan/{id}', [PengaduanController::class, 'show']);
Route::put('/pengaduan/{id}', [PengaduanController::class, 'update']);
Route::delete('/pengaduan/{id}', [PengaduanController::class, 'destroy']);

// Routes Admin mengelola Profil Desa
Route::get('/profildesa', [DesaController::class, 'index']);
Route::get('/profildesa/create', [DesaController::class, 'create']);
Route::get('/profildesa/edit/{id}', [DesaController::class, 'edit']);
Route::get('/profildesa/{id}', [DesaController::class, 'show']);
Route::post('/profildesa', [DesaController::class, 'store']);
Route::put('/profildesa/{id}', [DesaController::class, 'update']);
Route::delete('/profildesa/{id}', [DesaController::class, 'destroy']);

// Routes Admin mengelola Anggota BPD
Route::get('/angbpd', [AnggotaBPDController::class, 'index']);
Route::get('/angbpd/create', [AnggotaBPDController::class, 'create']);
Route::get('/angbpd/edit/{id}', [AnggotaBPDController::class, 'edit']);
Route::get('/angbpd/{id}', [AnggotaBPDController::class, 'show']);
Route::post('/angbpd', [AnggotaBPDController::class, 'store']);
Route::put('/angbpd/{id}', [AnggotaBPDController::class, 'update']);
Route::delete('/angbpd/{id}', [AnggotaBPDController::class, 'destroy']);

// Routes Admin mengelola Kritik dan Saran
Route::get('/kritiksaran', [KritikSaranController::class, 'index']);
Route::get('/kritiksaran/{id}', [KritikSaranController::class, 'show']);
Route::post('/kritiksaran', [KritikSaranController::class, 'store']);
Route::delete('/kritiksaran/{id}', [KritikSaranController::class, 'destroy']);

/*
=================================
=       ROUTES OPERATOR         =
=================================
*/

// Routes Operator
Route::get('/operator/dashboard', [PageController::class, 'operator']);

// Routes Admin mengelola Pengaduan
Route::get('/operator/pengaduan', [PesanController::class, 'index']);
Route::get('/operator/pengaduan/create', [PesanController::class, 'create']);
Route::get('/operator/pengaduan/{id}/edit', [PesanController::class, 'edit']);
Route::get('/operator/pengaduan/{id}', [PesanController::class, 'show']);
Route::post('/operator/pengaduan', [PesanController::class, 'store']);
Route::put('/operator/pengaduan/{id}', [PesanController::class, 'update']);
Route::delete('/operator/pengaduan/{id}', [PesanController::class, 'destroy']);

// Routes Admin mengelola Kritik dan Saran
Route::get('/operator/kritiksaran', [KritikSaranController::class, 'index']);
Route::get('/operator/kritiksaran/{id}', [KritikSaranController::class, 'show']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
