<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\AnggotaBPDController;
use App\Http\Controllers\KritikSaranController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LaporanController;

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
Route::get('/potensi', [PageController::class, 'potensi']);

// Routes Pemerintah Desa
Route::get('/pemda', [PageController::class, 'pemda']);
Route::get('/visimisi', [PageController::class, 'visimisi']);
Route::get('/bpd', [PageController::class, 'bpd']);

// Routes Lembaga Masyarakat
Route::get('/lpm', [PageController::class, 'lpm']);
Route::get('/karangtaruna', [PageController::class, 'karangtaruna']);
Route::get('/pkk', [PageController::class, 'pkk']);
Route::get('/bumdes', [PageController::class, 'bumdes']);

// Routes Transparansi Keuangan
Route::get('/transparan', [PageController::class, 'transparan']);

// Routes Data Desa
Route::get('/dapen', [PageController::class, 'pendidikan']);
Route::get('/dapek', [PageController::class, 'pekerjaan']);
Route::get('/dajen', [PageController::class, 'jenkel']);
Route::get('/daper', [PageController::class, 'perkawinan']);

// Route::group(['middleware' => ['auth', 'web']], function() {
    /*
    ==============================
    =       ROUTES LOGIN         =
    ==============================
    */
    
    // Routes Login Admin/Operator Desa
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::get('/logout', [LoginController::class, 'logout'])->name('auth.logout');
    Route::post('/login', [LoginController::class, 'login'])->name('auth.check');

    // Routes Pengaduan
    Route::get('/pengaduan', [PengaduanController::class, 'index'])->middleware('authcheck');
    Route::get('/pengaduan/create', [PengaduanController::class, 'create'])->middleware('authcheck');
    Route::get('/pengaduan/{id}', [PengaduanController::class, 'show'])->middleware('authcheck');
    Route::post('/pengaduan', [PengaduanController::class, 'store']);
    
    // Routes Surat
    Route::get('/surat', [SuratController::class, 'index'])->middleware('authcheck');
    Route::get('/surat/create', [SuratController::class, 'create'])->middleware('authcheck');
    Route::get('/surat/{id}', [SuratController::class, 'show'])->middleware('authcheck');
    Route::get('/download', [SuratController::class, 'download']);
    Route::post('/surat', [SuratController::class, 'store']);
    
    /*
        ==============================
        =       ROUTES ADMIN         =
        ==============================
    */
    
    // Routes Admin
    Route::get('/dashboard', [PageController::class, 'admin'])->middleware('authcheck');
    
    // Routes Admin mengelola Penduduk
    Route::get('/penduduk', [PendudukController::class, 'index'])->middleware('authcheck');
    Route::get('/penduduk/create', [PendudukController::class, 'create'])->middleware('authcheck');
    Route::get('/penduduk/{id}/edit', [PendudukController::class, 'edit'])->middleware('authcheck');
    Route::get('/penduduk/{id}', [PendudukController::class, 'show'])->middleware('authcheck');
    Route::post('/penduduk', [PendudukController::class, 'store']);
    Route::put('/penduduk/{id}', [PendudukController::class, 'update']);
    Route::delete('/penduduk/{id}', [PendudukController::class, 'destroy']);
    
    // Routes Admin mengelola Pengguna
    Route::get('/pengguna', [PenggunaController::class, 'index'])->middleware('authcheck');
    Route::get('/pengguna/create', [PenggunaController::class, 'create'])->middleware('authcheck');
    Route::get('/pengguna/{id}/edit', [PenggunaController::class, 'edit'])->middleware('authcheck');
    Route::get('/pengguna/{id}', [PenggunaController::class, 'show'])->middleware('authcheck');
    Route::post('/pengguna', [PenggunaController::class, 'store']);
    Route::put('/pengguna/{id}', [PenggunaController::class, 'update']);
    Route::delete('/pengguna/{id}', [PenggunaController::class, 'destroy']);
    
    // Routes Admin mengelola Pengaduan
    Route::get('/pengaduan', [PengaduanController::class, 'index'])->middleware('authcheck');
    Route::get('/pengaduan/{id}/edit', [PengaduanController::class, 'edit'])->middleware('authcheck');
    Route::get('/pengaduan/{id}', [PengaduanController::class, 'show'])->middleware('authcheck');
    Route::put('/pengaduan/{id}', [PengaduanController::class, 'update']);
    Route::delete('/pengaduan/{id}', [PengaduanController::class, 'destroy']);

    // Routes Admin mengelola Surat Online
    Route::get('/surat', [SuratController::class, 'index'])->middleware('authcheck');
    Route::get('/surat/{id}/edit', [SuratController::class, 'edit'])->middleware('authcheck');
    Route::get('/surat/{id}', [SuratController::class, 'show'])->middleware('authcheck');
    Route::put('/surat/{id}', [SuratController::class, 'update']);
    Route::delete('/surat/{id}', [SuratController::class, 'destroy']);
    
    // Routes Admin mengelola Profil Desa
    Route::get('/profildesa', [DesaController::class, 'index'])->middleware('authcheck');
    Route::get('/profildesa/create', [DesaController::class, 'create'])->middleware('authcheck');
    Route::get('/profildesa/edit/{id}', [DesaController::class, 'edit'])->middleware('authcheck');
    Route::get('/profildesa/{id}', [DesaController::class, 'show'])->middleware('authcheck');
    Route::post('/profildesa', [DesaController::class, 'store']);
    Route::put('/profildesa/{id}', [DesaController::class, 'update']);
    Route::delete('/profildesa/{id}', [DesaController::class, 'destroy']);
    
    // Routes Admin mengelola Anggota BPD
    Route::get('/angbpd', [AnggotaBPDController::class, 'index'])->middleware('authcheck');
    Route::get('/angbpd/create', [AnggotaBPDController::class, 'create'])->middleware('authcheck');
    Route::get('/angbpd/edit/{id}', [AnggotaBPDController::class, 'edit'])->middleware('authcheck');
    Route::get('/angbpd/{id}', [AnggotaBPDController::class, 'show'])->middleware('authcheck');
    Route::post('/angbpd', [AnggotaBPDController::class, 'store']);
    Route::put('/angbpd/{id}', [AnggotaBPDController::class, 'update']);
    Route::delete('/angbpd/{id}', [AnggotaBPDController::class, 'destroy']);
    
    // Routes Admin mengelola Kritik dan Saran
    Route::get('/kritiksaran', [KritikSaranController::class, 'index'])->middleware('authcheck');
    Route::get('/kritiksaran/{id}', [KritikSaranController::class, 'show'])->middleware('authcheck');
    Route::post('/kritiksaran', [KritikSaranController::class, 'store']);
    Route::delete('/kritiksaran/{id}', [KritikSaranController::class, 'destroy']);
    
    /*
    =================================
    =       ROUTES OPERATOR         =
    =================================
    */
    
    // Routes Operator
    Route::get('/operator/dashboard', [PageController::class, 'operator'])->middleware('authcheck');
    
    // Routes Operator mengelola Pengaduan
    Route::get('/operator/pengaduan', [PengaduanController::class, 'index'])->middleware('authcheck');
    Route::get('/operator/pengaduan/{id}/edit', [PengaduanController::class, 'edit'])->middleware('authcheck');
    Route::get('/operator/pengaduan/{id}', [PengaduanController::class, 'show'])->middleware('authcheck');
    Route::put('/operator/pengaduan/{id}', [PengaduanController::class, 'update']);
    
    // Routes Operator mengelola Surat Online
    Route::get('/operator/surat', [SuratController::class, 'index'])->middleware('authcheck');
    Route::get('/operator/surat/{id}', [SuratController::class, 'show'])->middleware('authcheck');

    // Routes Operator mengelola Kritik dan Saran
    Route::get('/operator/kritiksaran', [KritikSaranController::class, 'index'])->middleware('authcheck');
    Route::get('/operator/kritiksaran/{id}', [KritikSaranController::class, 'show'])->middleware('authcheck');
    
    /*
    ====================================
    =       ROUTES KEPALA DESA         =
    ====================================
    */
    
    // Routes Kepala Desa
    Route::get('/kepdes/dashboard', [PageController::class, 'kepdes'])->middleware('authcheck');
    
    // Routes Kepala Desa mengelola Pengaduan
    Route::get('/kepdes/pengaduan', [PengaduanController::class, 'index'])->middleware('authcheck');
    Route::get('/kepdes/pengaduan/{id}', [PengaduanController::class, 'show'])->middleware('authcheck');
    Route::put('/kepdes/pengaduan/{id}', [PengaduanController::class, 'update']);
    
    // Routes Kepala Desa mengelola Surat Online
    Route::get('/kepdes/surat', [SuratController::class, 'index'])->middleware('authcheck');
    Route::get('/kepdes/surat/{id}', [SuratController::class, 'show'])->middleware('authcheck');

    // Routes Kepala Desa mengelola Kritik dan Saran
    Route::get('/kepdes/kritiksaran', [KritikSaranController::class, 'index'])->middleware('authcheck');
    Route::get('/kepdes/kritiksaran/{id}', [KritikSaranController::class, 'show'])->middleware('authcheck');

    // Routes Kepala Desa Cetak Laporan
    Route::get('/kepdes/laporan', [LaporanController::class, 'index'])->middleware('authcheck');
    Route::get('/kepdes/laporan/show', [LaporanController::class, 'show'])->middleware('authcheck');
// });   