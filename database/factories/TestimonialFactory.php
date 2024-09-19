<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $image=['testimonial-1.jpg','testimonial-2.jpg','testimonial-3.jpg','testimonial-4.jpg'];
        $title=[' Design','Graphic',' Editing','Web ','Graphic','Video'];
        return [
            'name'=>fake()->name(),
            'image'=>fake()->randomElement($image),
            'subject'=>fake()->randomElement($title),
            'message'=>fake()->text(300),
            'isPublished'=>fake()->boolean(),
        ];
    }
}
