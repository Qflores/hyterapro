<?php

namespace Database\Factories;

use App\Models\Component;
use App\Models\Unidad;
use Illuminate\Database\Eloquent\Factories\Factory;

class PartidaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cantidad' => $this->faker->numberBetween(15, 255),
            'name' => $this->faker->realText(60),
            'description' => $this->faker->realText(150),
            'metrado' => $this->faker->numberBetween(1, 50),
            'unit_cost' => $this->faker->randomFloat(4, 50, 80000),
            'new_cost' => $this->faker->randomFloat(4, 80, 100000),
            'status' => $this->faker->numberBetween(1, 2),
            'unidad_id' => Unidad::all()->random()->id,
            'component_id' => Component::all()->random()->id,
        ];
    }
}
