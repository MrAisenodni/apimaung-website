<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $current_time = Carbon::now()->toDateTimeString();

        DB::table('login')
            ->insert([
                [
                    'id_penduduk'   => '1',
                    'id_angbpd'     => null,
                    'email'         => 'user@gmail.com',
                    'password'      => Hash::make('password'),
                    'akses'         => 'usr',
                    'created_at'    => $current_time,
                ],
                [
                    'id_penduduk'   => null,
                    'id_angbpd'     => '1',
                    'email'         => 'admin@gmail.com',
                    'password'      => Hash::make('password'),
                    'akses'         => 'adm',
                    'created_at'    => $current_time,
                ],
                [
                    'id_penduduk'   => null,
                    'id_angbpd'     => '1',
                    'email'         => 'operator@gmail.com',
                    'password'      => Hash::make('password'),
                    'akses'         => 'opr',
                    'created_at'    => $current_time,
                ]
            ]);
    }
}
