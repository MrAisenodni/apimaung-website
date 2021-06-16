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
}
