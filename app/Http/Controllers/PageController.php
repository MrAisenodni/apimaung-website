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
            'cpendd1'           => $this->penduduk->getCountPendD1(),
            'cpendd1laki'       => $this->penduduk->getCountPendD1Laki(),
            'cpendd1perempuan'  => $this->penduduk->getCountPendD1Perempuan(),
            'cpendd2'           => $this->penduduk->getCountPendD2(),
            'cpendd2laki'       => $this->penduduk->getCountPendD2Laki(),
            'cpendd2perempuan'  => $this->penduduk->getCountPendD2Perempuan(),
            'cpendd3'           => $this->penduduk->getCountPendD3(),
            'cpendd3laki'       => $this->penduduk->getCountPendD3Laki(),
            'cpendd3perempuan'  => $this->penduduk->getCountPendD3Perempuan(),
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
        $data = [
            'ctotal'            => $this->penduduk->getCount(),
            'claki'             => $this->penduduk->getCountLaki(),
            'cperempuan'        => $this->penduduk->getCountPerempuan(),
            'cpendn'            => $this->penduduk->getCountPekN(),
            'cpendnlaki'        => $this->penduduk->getCountPekNLaki(),
            'cpendnperempuan'   => $this->penduduk->getCountPekNPerempuan(),
            'cpendsd'           => $this->penduduk->getCountPekRT(),
            'cpendsdlaki'       => $this->penduduk->getCountPekRTLaki(),
            'cpendsdperempuan'  => $this->penduduk->getCountPekRTPerempuan(),
            'cpendsmp'          => $this->penduduk->getCountPekSiswa(),
            'cpendsmplaki'      => $this->penduduk->getCountPekSiswaLaki(),
            'cpendsmpperempuan' => $this->penduduk->getCountPekSiswaPerempuan(),
            'cpendsma'          => $this->penduduk->getCountPekPNS(),
            'cpendsmalaki'      => $this->penduduk->getCountPekPNSLaki(),
            'cpendsmaperempuan' => $this->penduduk->getCountPekPNSPerempuan(),
            'cpendd1'           => $this->penduduk->getCountPekNel(),
            'cpendd1laki'       => $this->penduduk->getCountPekNelLaki(),
            'cpendd1perempuan'  => $this->penduduk->getCountPekNelPerempuan(),
            'cpendd2'           => $this->penduduk->getCountPekTani(),
            'cpendd2laki'       => $this->penduduk->getCountPekTaniLaki(),
            'cpendd2perempuan'  => $this->penduduk->getCountPekTaniPerempuan(),
            'cpendd3'           => $this->penduduk->getCountPekTambak(),
            'cpendd3laki'       => $this->penduduk->getCountPekTambakLaki(),
            'cpendd3perempuan'  => $this->penduduk->getCountPekTambakPerempuan(),
            'cpends1'           => $this->penduduk->getCountPekLain(),
            'cpends1laki'       => $this->penduduk->getCountPekLainLaki(),
            'cpends1perempuan'  => $this->penduduk->getCountPekLainPerempuan(),
        ];
        return view('user.pekerjaan', $data);
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
            'cpenduduk'         => $this->penduduk->getCount(),
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
            'cpendd1'           => $this->penduduk->getCountPendD1(),
            'cpendd1laki'       => $this->penduduk->getCountPendD1Laki(),
            'cpendd1perempuan'  => $this->penduduk->getCountPendD1Perempuan(),
            'cpendd2'           => $this->penduduk->getCountPendD2(),
            'cpendd2laki'       => $this->penduduk->getCountPendD2Laki(),
            'cpendd2perempuan'  => $this->penduduk->getCountPendD2Perempuan(),
            'cpendd3'           => $this->penduduk->getCountPendD3(),
            'cpendd3laki'       => $this->penduduk->getCountPendD3Laki(),
            'cpendd3perempuan'  => $this->penduduk->getCountPendD3Perempuan(),
            'cpends1'           => $this->penduduk->getCountPendS1(),
            'cpends1laki'       => $this->penduduk->getCountPendS1Laki(),
            'cpends1perempuan'  => $this->penduduk->getCountPendS1Perempuan(),
            'cpends2'           => $this->penduduk->getCountPendS2(),
            'cpends2laki'       => $this->penduduk->getCountPendS2Laki(),
            'cpends2perempuan'  => $this->penduduk->getCountPendS2Perempuan(),
            'cpends3'           => $this->penduduk->getCountPendS3(),
            'cpends3laki'       => $this->penduduk->getCountPendS3Laki(),
            'cpends3perempuan'  => $this->penduduk->getCountPendS3Perempuan(),
            'ckerjan'            => $this->penduduk->getCountPekN(),
            'ckerjanlaki'        => $this->penduduk->getCountPekNLaki(),
            'ckerjanperempuan'   => $this->penduduk->getCountPekNPerempuan(),
            'ckerjasd'           => $this->penduduk->getCountPekRT(),
            'ckerjasdlaki'       => $this->penduduk->getCountPekRTLaki(),
            'ckerjasdperempuan'  => $this->penduduk->getCountPekRTPerempuan(),
            'ckerjasmp'          => $this->penduduk->getCountPekSiswa(),
            'ckerjasmplaki'      => $this->penduduk->getCountPekSiswaLaki(),
            'ckerjasmpperempuan' => $this->penduduk->getCountPekSiswaPerempuan(),
            'ckerjasma'          => $this->penduduk->getCountPekPNS(),
            'ckerjasmalaki'      => $this->penduduk->getCountPekPNSLaki(),
            'ckerjasmaperempuan' => $this->penduduk->getCountPekPNSPerempuan(),
            'ckerjad1'           => $this->penduduk->getCountPekNel(),
            'ckerjad1laki'       => $this->penduduk->getCountPekNelLaki(),
            'ckerjad1perempuan'  => $this->penduduk->getCountPekNelPerempuan(),
            'ckerjad2'           => $this->penduduk->getCountPekTani(),
            'ckerjad2laki'       => $this->penduduk->getCountPekTaniLaki(),
            'ckerjad2perempuan'  => $this->penduduk->getCountPekTaniPerempuan(),
            'ckerjad3'           => $this->penduduk->getCountPekTambak(),
            'ckerjad3laki'       => $this->penduduk->getCountPekTambakLaki(),
            'ckerjad3perempuan'  => $this->penduduk->getCountPekTambakPerempuan(),
            'ckerjas1'           => $this->penduduk->getCountPekLain(),
            'ckerjas1laki'       => $this->penduduk->getCountPekLainLaki(),
            'ckerjas1perempuan'  => $this->penduduk->getCountPekLainPerempuan(),
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
