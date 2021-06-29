<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Login extends Model
{
    public function getData($data) {
        return DB::table('login')
                    ->leftJoin('penduduk', 'penduduk.id_penduduk', '=', 'login.id_penduduk')
                    ->leftJoin('angbpd', 'angbpd.id_angbpd', '=', 'login.id_angbpd')
                    ->select('penduduk.nama AS penduduk', 'angbpd.nama AS angbpd', 'login.*')
                    ->where('login.email', $data['email'])
                    ->first();
    }
}
