<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TarifFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Tar_Euro' => $this->faker->numberBetween(1,200),
            'Tar_Description' => $this->faker->sentence,
        ];
    }
}
