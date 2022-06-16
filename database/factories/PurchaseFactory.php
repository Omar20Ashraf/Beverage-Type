<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PurchaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'beverage_id' => $this->faker->numberBetween(1,200),
            'price' => $this->faker->randomNumber(2, true),
        ];
    }
}
