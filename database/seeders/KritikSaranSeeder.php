<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KritikSaran;

class KritikSaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KritikSaran::factory()->count(50)->create();
    }
}
