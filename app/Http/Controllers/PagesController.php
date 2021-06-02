<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /*  =======================================
        =            PROFIL DESA              =
        ======================================= */

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
}
