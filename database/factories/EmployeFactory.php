<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Emp_Nss' => $this->faker->sentence,
            'Emp_Nom' => $this->faker->sentence,
            'Emp_Prn' => $this->faker->sentence,
            'Emp_Tarif' => $this->faker->sentence,
        ];
    }
}
