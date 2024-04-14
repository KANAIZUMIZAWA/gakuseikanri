<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class School_gradesFactory extends Factory
{
    public function definition(): array
    {
        return [
            'grade' => $this->faker->numberBetween(1, 3),
            'term' => $this->faker->numberBetween(1, 3),
            'japanese' => $this->faker->numberBetween(1, 5),
            'math' => $this->faker->numberBetween(1, 5),
            'science' => $this->faker->numberBetween(1, 5),
            'scocial_studies' => $this->faker->numberBetween(1, 5),
            'music' => $this->faker->numberBetween(1, 5),
            'home_economics' => $this->faker->numberBetween(1, 5),
            'english' => $this->faker->numberBetween(1, 5),
            'art' => $this->faker->numberBetween(1, 5),
            'health_and_physical_education' => $this->faker->numberBetween(1, 5),
        ];
    }
}
