<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AnggotaBPD extends Model
{
    use HasFactory;

    protected $table = 'angbpd';

    public function getAllData() {
        return DB::table('angbpd')->get();
    }

    public function getData($id) {
        return DB::table('angbpd')
                    ->where('id_angbpd', $id)
                    ->first();
    }

    public function getCount() {
        return DB::table('angbpd')->count();
    }

    public function tambahData($data) {
        return DB::table('angbpd')
                    ->insert($data);
    }

    public function ubahData($data,$id) {
        return DB::table('angbpd')
                    ->where('id_angbpd', $id)
                    ->update($data);
    }

    public function hapusData($id) {
        return DB::table('angbpd')
                    ->where('id_angbpd', $id)
                    ->delete();
    }
}
