<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Laporan extends Model
{
    public function getData($dari_tanggal, $ke_tanggal, $jenis) {
        return DB::table($jenis)
                    ->whereBetween('created_at', [$dari_tanggal, date('Y-m-d 23:59:59', strtotime($ke_tanggal))])
                    ->get();
    }
}
