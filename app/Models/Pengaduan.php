<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pengaduan extends Model
{
    public function getAllData() {
        return DB::table('pengaduan')
                    ->leftJoin('penduduk', 'penduduk.id_penduduk', '=', 'pengaduan.id_penduduk')
                    ->leftJoin('angbpd', 'angbpd.id_angbpd', '=', 'pengaduan.id_angbpd')
                    ->select('penduduk.nama AS penduduk', 'angbpd.nama AS angbpd', 'pengaduan.*')
                    ->get(); // get() => SELECT * FROM pengaduan
    }

    public function getData($id) {
        return DB::table('pengaduan')
                    ->leftJoin('penduduk', 'penduduk.id_penduduk', '=', 'pengaduan.id_penduduk')
                    ->leftJoin('angbpd', 'angbpd.id_angbpd', '=', 'pengaduan.id_angbpd')
                    ->leftJoin('login', 'login.id_penduduk', '=', 'penduduk.id_penduduk')
                    ->select(
                        'penduduk.nama AS penduduk', 
                        'penduduk.nik AS nik', 
                        'angbpd.nama AS angbpd', 
                        'angbpd.nip AS nip', 
                        'login.email AS email', 
                        'pengaduan.*'
                    )
                    ->where('id_pengaduan', $id)
                    ->first();
    }

    public function getAllDataUser() {
        return DB::table('pengaduan')
                    ->leftJoin('penduduk', 'penduduk.id_penduduk', '=', 'pengaduan.id_penduduk')
                    ->leftJoin('angbpd', 'angbpd.id_angbpd', '=', 'pengaduan.id_angbpd')
                    ->leftJoin('login', 'login.id_penduduk', '=', 'penduduk.id_penduduk')
                    ->select(
                        'penduduk.nama AS penduduk', 
                        'penduduk.nik AS nik', 
                        'angbpd.nama AS angbpd', 
                        'angbpd.nip AS nip', 
                        'login.email AS email', 
                        'pengaduan.*'
                    )
                    ->where('pengaduan.id_penduduk', session()->get('sid_penduduk'))
                    ->get();
    }

    public function getCount() {
        return DB::table('pengaduan')
                    ->count();
    }

    public function getCountSelesai() {
        return DB::table('pengaduan')
                    ->where('status', 'complete')
                    ->count();
    }

    public function getCountMenunggu() {
        return DB::table('pengaduan')
                    ->where('status', 'pending')
                    ->count();
    }

    public function tambahData($data) {
        return DB::table('pengaduan')
                    ->insert($data);
    }

    public function ubahData($data,$id) {
        return DB::table('pengaduan')
                    ->where('id_pengaduan', $id)
                    ->update($data);
    }

    public function hapusData($id) {
        return DB::table('pengaduan')
                    ->where('id_pengaduan', $id)
                    ->delete();
    }
}
