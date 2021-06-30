<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PendudukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $current_time = Carbon::now()->toDateTimeString();

        DB::table('penduduk')
            ->insert([
                'nik'           => '3275050910990012',
                'nokk'          => '3275050910990222',
                'nama'          => 'Siti Fatimah',
                'tmpt_lahir'    => 'Bogor',
                'tgl_lahir'     => '1999-10-09',
                'jenkel'        => 'p',
                'agama'         => 'islam',
                'alamat'        => 'Bogor',
                'rt'            => '003',
                'rw'            => '009',
                'pendidikan'    => 'S1',
                'pekerjaan'     => 'Direktur Utama',
                'status'        => 'lajang',
                'created_at'    => $current_time,
            ]);
    }
}
