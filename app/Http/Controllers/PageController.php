<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnggotaBPD;
use App\Models\Penduduk;

class PageController extends Controller
{
    public function __construct() {
        $this->angbpd = new AnggotaBPD();
        $this->penduduk = new Penduduk();
    }
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
        $data = [
            'angbpd'        => $this->angbpd->getAllData(),
        ];
        return view('user.bpd', $data);
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
        $data = [
            'ctotal'            => $this->penduduk->getCount(),
            'claki'             => $this->penduduk->getCountLaki(),
            'cperempuan'        => $this->penduduk->getCountPerempuan(),
            'cpendn'            => $this->penduduk->getCountPendN(),
            'cpendnlaki'        => $this->penduduk->getCountPendNLaki(),
            'cpendnperempuan'   => $this->penduduk->getCountPendNPerempuan(),
            'cpendsd'           => $this->penduduk->getCountPendSD(),
            'cpendsdlaki'       => $this->penduduk->getCountPendSDLaki(),
            'cpendsdperempuan'  => $this->penduduk->getCountPendSDPerempuan(),
            'cpendsmp'          => $this->penduduk->getCountPendSMP(),
            'cpendsmplaki'      => $this->penduduk->getCountPendSMPLaki(),
            'cpendsmpperempuan' => $this->penduduk->getCountPendSMPPerempuan(),
            'cpendsma'          => $this->penduduk->getCountPendSMA(),
            'cpendsmalaki'      => $this->penduduk->getCountPendSMALaki(),
            'cpendsmaperempuan' => $this->penduduk->getCountPendSMAPerempuan(),
            'cpendd3'           => $this->penduduk->getCountPendD3(),
            'cpendd3laki'       => $this->penduduk->getCountPendD3Laki(),
            'cpendd3perempuan'  => $this->penduduk->getCountPendD3Perempuan(),
            'cpendd4'           => $this->penduduk->getCountPendD4(),
            'cpendd4laki'       => $this->penduduk->getCountPendD4Laki(),
            'cpendd4perempuan'  => $this->penduduk->getCountPendD4Perempuan(),
            'cpends1'           => $this->penduduk->getCountPendS1(),
            'cpends1laki'       => $this->penduduk->getCountPendS1Laki(),
            'cpends1perempuan'  => $this->penduduk->getCountPendS1Perempuan(),
            'cpends2'           => $this->penduduk->getCountPendS2(),
            'cpends2laki'       => $this->penduduk->getCountPendS2Laki(),
            'cpends2perempuan'  => $this->penduduk->getCountPendS2Perempuan(),
            'cpends3'           => $this->penduduk->getCountPendS3(),
            'cpends3laki'       => $this->penduduk->getCountPendS3Laki(),
            'cpends3perempuan'  => $this->penduduk->getCountPendS3Perempuan(),
        ];
        return view('user.pendidikan', $data);
    }

    // Halaman Data Pekerjaan
    public function pekerjaan() {
        return view('user.pekerjaan');
    }
    
    // Halaman Data Jenis Kelamin
    public function jenkel() {
        $data = [
            'claki'      => $this->penduduk->getCountLaki(),
            'cperempuan' => $this->penduduk->getCountPerempuan(),
            'ctotal'     => $this->penduduk->getCount(),
        ];
        return view('user.jenkel', $data);
    }

    // Halaman Data Perkawinan
    public function perkawinan() {
        $data = [
            'ctotal'                => $this->penduduk->getCount(),
            'claki'                 => $this->penduduk->getCountLaki(),
            'cperempuan'            => $this->penduduk->getCountPerempuan(),
            'cstatusnikah'          => $this->penduduk->getCountStatusNikah(),
            'cstatusnikahlaki'      => $this->penduduk->getCountStatusNikahLaki(),
            'cstatusnikahperempuan' => $this->penduduk->getCountStatusNikahPerempuan(),
            'cstatuslajang'         => $this->penduduk->getCountStatusLajang(),
            'cstatuslajanglaki'     => $this->penduduk->getCountStatusLajangLaki(),
            'cstatuslajangperempuan'=> $this->penduduk->getCountStatusLajangPerempuan(),
            'cstatusduda'           => $this->penduduk->getCountStatusDuda(),
            'cstatusdudalaki'       => $this->penduduk->getCountStatusDudaLaki(),
            'cstatusdudaperempuan'  => $this->penduduk->getCountStatusDudaPerempuan(),
            'cstatusjanda'          => $this->penduduk->getCountStatusJanda(),
            'cstatusjandalaki'      => $this->penduduk->getCountStatusJandaLaki(),
            'cstatusjandaperempuan' => $this->penduduk->getCountStatusJandaPerempuan(),
        ];
        return view('user.perkawinan', $data);
    }

    /*  
    ========================================
    =               ADMIN                  =
    ======================================== 
    */
    
    // Dashboard Admin
    public function admin() {
        $data = [
            'cpenduduk'     => $this->penduduk->getCount(),
            'claki'         => $this->penduduk->getCountLaki(),
            'cperempuan'    => $this->penduduk->getCountPerempuan(),
            'cangbpd'       => $this->angbpd->getCount(),
        ];

        return view('admin.index', $data);
    }

    /*  
    ========================================
    =              OPERATOR                =
    ======================================== 
    */
    
    // Dashboard Operator
    public function operator() {
        $data = [
            'cpenduduk'     => $this->penduduk->getCount(),
            'claki'         => $this->penduduk->getCountLaki(),
            'cperempuan'    => $this->penduduk->getCountPerempuan(),
            'cangbpd'       => $this->angbpd->getCount(),
        ];

        return view('operator.index', $data);
    }
}
