<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KritikSaran extends Model
{
    use HasFactory;

    protected $table = 'kritiksaran';

    public function getAllData() {
        return DB::table('kritiksaran')->get();
    }

    public function getData($id) {
        return DB::table('kritiksaran')
                    ->where('id_kritiksaran', $id)
                    ->first();
    }

    public function getCount() {
        return DB::table('kritiksaran')
                    ->count();
    }

    public function tambahData($data) {
        return DB::table('kritiksaran')->insert($data);
    }

    public function hapusData($id) {
        return DB::table('kritiksaran')
                    ->where('id_kritiksaran', $id)
                    ->delete();
    }
}
