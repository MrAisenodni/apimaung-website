<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Penduduk extends Model
{
    public function getAllData() {
        return DB::table('penduduk')
                    ->get(); // get() => SELECT * FROM penduduk
    }

    public function getData($id) {
        return DB::table('penduduk')
                    ->where('id_penduduk', $id)
                    ->first();
    }

    public function tambahData($data) {
        return DB::table('penduduk')
                    ->insert($data);
    }

    public function ubahData($data,$id) {
        return DB::table('penduduk')
                    ->where('id_penduduk', $id)
                    ->update($data);
    }

    // Function SoftDeletes
    // public function hapusData($data,$id) {
    //     return DB::table('penduduk')
    //                 ->where('id_penduduk', $id)
    //                 ->update($data);
    // }

    public function hapusData($id) {
        return DB::table('penduduk')
                    ->where('id_penduduk', $id)
                    ->delete();
    }
}
