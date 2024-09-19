<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\user>
 */
class instructorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $image=['team-1.jpg','team-2.jpg','team-3.jpg','team-4.jpg'];
        $title=[' Design','Graphic',' Editing','Web ','Graphic','Video'];
        return [
            'name'=>fake()->name(),
            'image'=>fake()->randomElement($image),
            'specilisation'=>fake()->randomElement($title),
            'isPublished'=>fake()->boolean(),
            'isActive'=>fake()->boolean(),
        ];
    }
}
