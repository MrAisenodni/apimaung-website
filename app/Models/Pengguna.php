<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pengguna extends Model
{
    public function getAllData() {
        return DB::table('login')
                    ->leftJoin('penduduk', 'penduduk.id_penduduk', '=', 'login.id_penduduk')
                    ->leftJoin('angbpd', 'angbpd.id_angbpd', '=', 'login.id_angbpd')
                    ->select('penduduk.nama AS penduduk', 'angbpd.nama AS angbpd', 'login.*')
                    ->get(); // get() => SELECT * FROM login
    }

    public function getData($id) {
        return DB::table('login')
                    ->leftJoin('penduduk', 'penduduk.id_penduduk', '=', 'login.id_penduduk')
                    ->leftJoin('angbpd', 'angbpd.id_angbpd', '=', 'login.id_angbpd')
                    ->where('id_login', $id)
                    ->first();
    }

    public function tambahData($data) {
        return DB::table('login')->insert($data);

    }
    
    public function ubahData($data, $id) {
        return DB::table('login')
                    ->where('id_login', $id)
                    ->update($data);
    }

    public function hapusData($id) {
        return DB::table('login')
                    ->where('id_login', $id)
                    ->delete();
    }
}
