<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Login extends Model
{
    public function getData($data) {
        return DB::table('login')
                    ->where('email', $data['email'])
                    ->first();
    }
}
