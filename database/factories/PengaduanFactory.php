<?php

namespace Database\Factories;

use App\Models\Pengaduan;
use Illuminate\Database\Eloquent\Factories\Factory;

class PengaduanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pengaduan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_penduduk'           => $this->faker->randomNumber(3, false),
            'id_angbpd'             => $this->faker->randomNumber(3, false),
            'judul'                 => $this->faker->sentence(),
            'pesan'                 => $this->faker->paragraph(3),
            'balas_pesan'           => $this->faker->paragraph(3),
            'tgl_kejadian'          => $this->faker->date(),
            'lokasi'                => $this->faker->city(),
            'instansi'              => $this->faker->company(),
            'status'                => $this->faker->randomElement(['pending', 'complete']),
            'kategori'              => $this->faker->randomElement(['penting', 'umum']),
            'updated_at'            => null,
        ];
    }
}
