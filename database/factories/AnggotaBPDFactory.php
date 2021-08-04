<?php

namespace Database\Factories;

use App\Models\AnggotaBPD;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnggotaBPDFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AnggotaBPD::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nip'           => $this->faker->unique()->numerify('###################'),
            'nama'          => $this->faker->name(),
            'jenkel'        => $this->faker->randomElement(['l', 'p']),
            'agama'         => $this->faker->randomElement(['islam', 'kristen', 'konghucu', 'hindu', 'buddha']),
            'alamat'        => $this->faker->address(),
            'jabatan'       => $this->faker->jobTitle(),
            'updated_at'    => null,
        ];
    }
}
