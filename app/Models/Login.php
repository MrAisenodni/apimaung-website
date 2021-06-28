<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Login extends Model
{
    public function getAllData() {
        return DB::table('login')->get();
    }
}
