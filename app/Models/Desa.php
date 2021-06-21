<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Desa extends Model
{
    public function getAllData() {
        return DB::table('desa')->get(); // get() => SELECT * FROM penduduk
    }

    public function getData($id) {
        return DB::table('desa')
                    ->where('id_desa', $id)
                    ->first();
    }

    public function tambahData($data) {
        return DB::table('desa')->insert($data);

    }
    
    public function ubahData($data, $id) {
        return DB::table('desa')
                    ->where('id_desa', $id)
                    ->update($data);
    }

    public function hapusData($id) {
        return DB::table('desa')
                    ->where('id_desa', $id)
                    ->delete();
    }
}
