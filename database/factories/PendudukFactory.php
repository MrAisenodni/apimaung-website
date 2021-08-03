<?php

namespace Database\Factories;

use App\Models\Penduduk;
use Illuminate\Database\Eloquent\Factories\Factory;

class PendudukFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Penduduk::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nik'           => $this->faker->unique()->numerify('################'),
            'nokk'          => $this->faker->numerify('################'),
            'nama'          => $this->faker->name(),
            'tmpt_lahir'    => $this->faker->city(),
            'tgl_lahir'     => $this->faker->date(),
            'jenkel'        => $this->faker->randomElement(['l', 'p']),
            'agama'         => $this->faker->randomElement(['islam', 'kristen', 'konghucu', 'hindu', 'buddha']),
            'alamat'        => $this->faker->address(),
            'rt'            => $this->faker->numerify('###'),
            'rw'            => $this->faker->numerify('###'),
            'pendidikan'    => $this->faker->randomElement(['n', 'sd', 'smp', 'sma', 'd1', 'd2', 'd3', 's1', 's2', 's3']),
            'pekerjaan'     => $this->faker->randomElement(['n', 'rumahtangga', 'siswa', 'pns', 'nelayan', 'petani', 'tambak', 'lain']),
            'status'        => $this->faker->randomElement(['lajang', 'nikah', 'duda', 'janda']),
            'updated_at'    => NULL,
        ];
    }
} 
