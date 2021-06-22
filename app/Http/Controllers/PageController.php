<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /*  
        =======================================
        =            PROFIL DESA              =
        ======================================= 
    */

    // Halaman Profil Desa
    public function home() {
        return view('user.index');
    }

    // Halaman Sejarah Desa
    public function sejarah() {
        return view('user.sejarah');
    }
    
    // Halaman Profil Wilayah Desa
    public function wilayah() {
        return view('user.wilayah');
    }

    // Halaman Peta Desa
    public function peta() {
        return view('user.peta');
    }
    
    /*  
    =======================================
    =           PEMERINTAH DESA           =
    ======================================= 
    */
    
    // Halaman Pemerintah Desa
    public function pemda() {
        return view('user.pemda');
    }
    
    // Halaman Visi dan Misi
    public function visimisi() {
        return view('user.visimisi');
    }
    
    // Halaman Profil Wilayah Desa
    public function bpd() {
        return view('user.bpd');
    }
    
    /*  
        =======================================
        =            PROFIL DESA              =
        ======================================= 
    */

    // Halaman Profil Desa
    public function lem() {
        return view('user.lem');
    }

    // Halaman Sejarah Desa
    public function lpm() {
        return view('user.lpm');
    }
    
    // Halaman Profil Wilayah Desa
    public function karangtaruna() {
        return view('user.karangtaruna');
    }

    // Halaman Peta Desa
    public function pkk() {
        return view('user.pkk');
    }

    /*  
        =====================================
        =            DATA DESA              =
        ===================================== 
    */

    // Halaman Data Pendidikan
    public function pendidikan() {
        return view('user.pendidikan');
    }

    // Halaman Data Pekerjaan
    public function pekerjaan() {
        return view('user.pekerjaan');
    }
    
    // Halaman Data Jenis Kelamin
    public function jenkel() {
        return view('user.jenkel');
    }

    // Halaman Data Perkawinan
    public function perkawinan() {
        return view('user.perkawinan');
    }

    /*  
    ========================================
    =               ADMIN                  =
    ======================================== 
    */
    
    // Dashboard Admin
    public function admin() {
        return view('admin.index');
    }

    /*  
    ========================================
    =              OPERATOR                =
    ======================================== 
    */
    
    // Dashboard Operator
    public function operator() {
        return view('operator.index');
    }
}
