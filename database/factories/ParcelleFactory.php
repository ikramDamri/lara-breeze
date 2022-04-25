<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ParcelleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Par_Nom' => $this->faker->sentence,
            'Par_Lieu' => $this->faker->sentence,
            'Par_Superficie' => $this->faker->numberBetween(1,1000),
            'Par_Prop'=>$this->faker->numberBetween(1,10),
        ];
    }
}
