<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BeverageFactory extends Factory
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
            'name' => $this->faker->name(),
            'type' => $this->faker->name(),
            'price' => $this->faker->randomNumber(2,true),
        ];
    }
}
