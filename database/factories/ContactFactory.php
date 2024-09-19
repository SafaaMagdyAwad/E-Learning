<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title=[' Design','Graphic',' Editing','Web ','Graphic','Video'];
        return [
            'name'=>fake()->name(),
            'email'=>fake()->email(),
            'subject'=>fake()->randomElement($title),
            'message'=>fake()->text(3000),
        ];
    }
}
