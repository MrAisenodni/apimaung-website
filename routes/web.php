<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LoginsController;
use App\Http\Controllers\PenduduksController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\AnggotaBPDController;
use App\Http\Controllers\KritikSaranController;

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
Route::get('/pengaduan/create', [PengaduanController::class, 'create']);

/*
    ==============================
    =       ROUTES LOGIN         =
    ==============================
*/

Auth::routes();

// Routes Login Admin/Operator Desa
Route::get('/login', [LoginsController::class, 'index']);

/*
    ==============================
    =       ROUTES ADMIN         =
    ==============================
*/

// Routes Admin
Route::get('/dashboard', [PagesController::class, 'admin']);

// Routes Admin mengelola Penduduk
Route::get('/penduduk', [PenduduksController::class, 'index']);
Route::get('/penduduk/create', [PenduduksController::class, 'create']);
Route::get('/penduduk/edit/{id}', [PenduduksController::class, 'edit']);
Route::get('/penduduk/{id}', [PenduduksController::class, 'show']);
Route::post('/penduduk', [PenduduksController::class, 'store']);
Route::put('/penduduk/{id}', [PenduduksController::class, 'update']);
Route::delete('/penduduk/{id}', [PenduduksController::class, 'destroy']);

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
Route::delete('/kritiksaran/{id}', [KritikSaranController::class, 'destroy']);

/*
=================================
=       ROUTES OPERATOR         =
=================================
*/

// Routes Operator
Route::get('/operator/dashboard', [PagesController::class, 'operator']);

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