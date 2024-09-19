<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $icon=['fa fa-3x  fa-globe  text-primary mb-4 ','fa fa-3x  fa-home  text-primary mb-4 ','fa fa-3x  fa-book-open  text-primary mb-4','fa fa-3x  fa-graduation-cap  text-primary mb-4'];
        $title=['Online Classes','Home Projects','Book Library','Skilled Instructors'];
        return [
            'icon'=>fake()->randomElement($icon),
            'title'=>fake()->randomElement($title),
            'description'=>fake()->text(300),
            'isPublished'=>fake()->boolean(),
        ];
    }
}
