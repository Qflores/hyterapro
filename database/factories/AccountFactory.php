<?php

namespace Database\Factories;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'bank_name' => $this->faker->company,
            'cuenta' => $this->faker->creditCardNumber,
            'interbancario' => $this->faker->creditCardNumber,
            'status' => rand(1, 2),
            'supplier_id' => Supplier::all()->random()->id,
        ];
    }
}
