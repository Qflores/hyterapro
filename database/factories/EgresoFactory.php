<?php

namespace Database\Factories;

use App\Models\Partida;
use Illuminate\Database\Eloquent\Factories\Factory;

class EgresoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'monto' => $this->faker->randomFloat(3, 50, 50000),
            'fecha_inico' => $this->faker->dateTimeThisYear(),
            'fecha_fin' => $this->faker->dateTimeThisYear(),
            'status' => $this->faker->numberBetween(1, 2),
            'user_id' => rand(1, 5),
            'partida_id' => Partida::all()->random()->id,

        ];
    }
}
