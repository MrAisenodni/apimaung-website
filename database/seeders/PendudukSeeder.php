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
                [
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
                    'pendidikan'    => 's1',
                    'pekerjaan'     => 'Direktur Utama',
                    'status'        => 'lajang',
                    'created_at'    => $current_time,
                ],[
                    'nik'           => '3275050910990113',
                    'nokk'          => '3275050910990232',
                    'nama'          => 'Afiani Maulidiyah',
                    'tmpt_lahir'    => 'Depok',
                    'tgl_lahir'     => '1999-07-23',
                    'jenkel'        => 'p',
                    'agama'         => 'islam',
                    'alamat'        => 'Depok',
                    'rt'            => '010',
                    'rw'            => '002',
                    'pendidikan'    => 's1',
                    'pekerjaan'     => 'CEO',
                    'status'        => 'nikah',
                    'created_at'    => $current_time,
                ],[
                    'nik'           => '3275050910990429',
                    'nokk'          => '3275050910990225',
                    'nama'          => 'Billy Watson',
                    'tmpt_lahir'    => 'Jakarta',
                    'tgl_lahir'     => '1965-10-09',
                    'jenkel'        => 'l',
                    'agama'         => 'islam',
                    'alamat'        => 'Jakarta',
                    'rt'            => '002',
                    'rw'            => '011',
                    'pendidikan'    => 'sma',
                    'pekerjaan'     => 'Chef',
                    'status'        => 'lajang',
                    'created_at'    => $current_time,
                ],
            ]);
    }
}
