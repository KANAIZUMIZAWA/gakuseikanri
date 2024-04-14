<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;

class StudentFactory extends Factory
{
    protected $model = Student::class;
    public function definition(): array
    {
        return [
            'id' => Student::factory(),
            'grade' => $this->faker->numberBetween(1, 3),
            'name' => $this->faker->word,
            'address' => $this->faker->word,
            'img_path' => 'https://picsum.photos/200/300',
        ];
    }
}
