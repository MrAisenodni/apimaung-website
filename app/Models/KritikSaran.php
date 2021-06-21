<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KritikSaran extends Model
{
    public function getAllData() {
        return DB::table('kritiksaran')->get();
    }

    public function getData($id) {
        return DB::table('kritiksaran')
                    ->where('id_kritiksaran', $id)
                    ->first();
    }

    public function hapusData($id) {
        return DB::table('kritiksaran')
                    ->where('id_kritiksaran', $id)
                    ->delete();
    }
}
