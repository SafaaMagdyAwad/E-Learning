<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title=[' Design','Graphic',' Editing','Web ','Graphic','Video'];
        $image=['cat-1.jpg','cat-2.jpg','cat-3.jpg','cat-4.jpg'];
        return [
            'title'=>fake()->unique()->randomElement($title),
            'image'=>fake()->randomElement($image),
        ];
    }
}
