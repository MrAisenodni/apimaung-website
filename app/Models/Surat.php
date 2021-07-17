<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Surat extends Model
{
    public function getAllData() {
        return DB::table('surat')
                    ->leftJoin('penduduk', 'penduduk.id_penduduk', '=', 'surat.id_penduduk')
                    ->leftJoin('angbpd', 'angbpd.id_angbpd', '=', 'surat.id_angbpd')
                    ->select('penduduk.*', 'surat.*')
                    ->get(); 
    }

    public function getData($id) {
        return DB::table('surat')
                    ->leftJoin('penduduk', 'penduduk.id_penduduk', '=', 'surat.id_penduduk')
                    ->leftJoin('angbpd', 'angbpd.id_angbpd', '=', 'surat.id_angbpd')
                    ->leftJoin('login', 'login.id_penduduk', '=', 'penduduk.id_penduduk')
                    ->select(
                        'penduduk.*', 
                        'login.*', 
                        'surat.*'
                    )
                    ->where('id_surat', $id)
                    ->first();
    }

    public function getAllDataUser() {
        return DB::table('surat')
                    ->leftJoin('penduduk', 'penduduk.id_penduduk', '=', 'surat.id_penduduk')
                    ->leftJoin('angbpd', 'angbpd.id_angbpd', '=', 'surat.id_angbpd')
                    ->leftJoin('login', 'login.id_penduduk', '=', 'penduduk.id_penduduk')
                    ->select(
                        'penduduk.nama AS penduduk', 
                        'penduduk.nik AS nik', 
                        'angbpd.nama AS angbpd', 
                        'angbpd.nip AS nip', 
                        'login.email AS email', 
                        'surat.*'
                    )
                    ->where('surat.id_penduduk', session()->get('sid_penduduk'))
                    ->get();
    }

    public function getCount() {
        return DB::table('surat')
                    ->count();
    }

    public function getCountSelesai() {
        return DB::table('surat')
                    ->where('status', 'complete')
                    ->count();
    }

    public function getCountMenunggu() {
        return DB::table('surat')
                    ->where('status', 'pending')
                    ->orwhere('status', 'validate')
                    ->count();
    }

    public function getCountDitolak() {
        return DB::table('surat')
                    ->where('status', 'reject')
                    ->count();
    }

    public function checkJenis($check) {
        return DB::table('surat')
                    ->where('jenis', $check)
                    ->count();
    }

    public function tambahData($data) {
        return DB::table('surat')
                    ->insert($data);
    }

    public function ubahData($data,$id) {
        return DB::table('surat')
                    ->where('id_surat', $id)
                    ->update($data);
    }

    public function hapusData($id) {
        return DB::table('surat')
                    ->where('id_surat', $id)
                    ->delete();
    }
}
