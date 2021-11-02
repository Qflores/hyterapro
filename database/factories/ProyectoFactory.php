<?php

namespace Database\Factories;

use App\Models\Supplier;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\App;

class ProyectoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->realText(30),
            'description' => $this->faker->realText(150),
            'status' => rand(1, 4),
            'fecha_inicio' => $this->faker->dateTimeThisYear,
            'fecha_fin' => $this->faker->dateTimeThisYear,
            'jefe_id' => User::all()->random()->id, //rand(1, 5),
            'coordinador_id' => User::all()->random()->id, //rand(1, 5),
            'cliente_id' => Supplier::all()->random()->id, //rand(1, 5),
            'supplier_id' => Supplier::all()->random()->id, //rand(1, 5),
        ];

        //$this->faker->randomElement([1, 2, 3, 4, 5]) //Supplier::all()->random()->id,
    }
}
