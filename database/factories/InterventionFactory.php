<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InterventionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Int_Emp_Nss' => $this->faker->sentence,
            'Int_Par_Id'=>$this->faker->numberBetween(1,10),
            'Int_Debut' => $this->faker->sentence,
            'Int_Nb_Jours'=>$this->faker->numberBetween(1,10),
        ];
    }
}
