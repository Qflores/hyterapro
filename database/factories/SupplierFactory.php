<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SupplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'razon_social' => $this->faker->company,
            'address' => $this->faker->address,
            'ruc' => $this->faker->numberBetween(11111111111, 99999999999),
            'phone1' => $this->faker->phoneNumber,
            'phone2' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'contacto_name' => $this->faker->name,
            'status' => rand(1, 2),
        ];
    }
}
