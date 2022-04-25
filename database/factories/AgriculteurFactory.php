<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AgriculteurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Agr_Nom' => $this->faker->sentence,
            'Agr_Prn' => $this->faker->sentence,
            'Agr_Resid' => $this->faker->sentence,
        ];
    }
}
