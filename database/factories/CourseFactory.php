<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title=[' Design','Graphic',' Editing','Web ','Graphic','Video'];
        $image=['course-1.jpg','course-2.jpg','course-3.jpg'];
        return [
            'title'=>fake()->randomElement($title),
            'price'=>fake()->numberBetween(100,20000),
            'star'=>fake()->numberBetween(100,4000),
            'numberOfStudents'=>fake()->numberBetween(10,50),
            'duration'=>fake()->numberBetween(3,7),
            'isPopular'=>fake()->boolean(),
            'isPublished'=>fake()->boolean(),
            'image'=>fake()->randomElement($image),
            'instructor_id'=>fake()->numberBetween(1,10),
            'category_id'=>fake()->numberBetween(1,5),
        ];
    }
}
