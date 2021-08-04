<?php

namespace Database\Factories;

use App\Models\KritikSaran;
use Illuminate\Database\Eloquent\Factories\Factory;

class KritikSaranFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = KritikSaran::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama'              => $this->faker->name(),
            'no_hp'             => $this->faker->numerify('085#########'),
            'pesan'             => $this->faker->paragraph(3),
            'updated_at'        => null,
        ];
    }
}
