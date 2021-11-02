<?php

namespace Database\Factories;

use App\Models\Partida;
use App\Models\Proyecto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComponentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->realText(50),
            'description' => $this->faker->realText(110),
            'order' => rand(1, 20),
            'status' => rand(1, 2),
            'presupuesto' => $this->faker->randomFloat(4, 50000, 5251123),
            'component_id' => rand(1, 6),
            'proyect_id' => Proyecto::all()->random()->id,
        ];
    }
}
