<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Penduduk extends Model
{
    public function getAllData() {
        return DB::table('penduduk')->get(); // get() => SELECT * FROM penduduk
    }
}
