<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $image=['student-1.jpg','student-2.jpg','student-3.jpg','student-4.jpg'];
        $title=[' Design','Graphic',' Editing','Web ','Graphic','Video'];
        return [
            'name'=>fake()->name(),
            'image'=>fake()->randomElement($image),
            'phone'=>fake()->phoneNumber(),
            'isActive'=>fake()->boolean(),
        ];
    }
}
