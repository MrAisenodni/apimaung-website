<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AnggotaBPD extends Model
{
    public function getAllData() {
        return DB::table('angbpd')->get();
    }

    public function getData($id) {
        return DB::table('angbpd')
                    ->where('id_angbpd', $id)
                    ->first();
    }
}
