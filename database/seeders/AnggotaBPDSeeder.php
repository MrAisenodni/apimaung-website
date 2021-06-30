<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AnggotaBPDSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $current_time = Carbon::now()->toDateTimeString();

        DB::table('angbpd')
            ->insert([
                'nip'           => '1278491284',
                'nama'          => 'Afiani Maulidiyah',
                'jenkel'        => 'p',
                'agama'         => 'islam',
                'alamat'        => 'Depok',
                'jabatan'       => 'PPK',
                'created_at'    => $current_time,
            ]);
    }
}
