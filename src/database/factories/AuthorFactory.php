<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Author>
 */
class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $gender = rand(0,1);
        return [
            "first_name" => fake()->firstName(["Female", "Male"][$gender]),
            "last_name" => fake()->lastName(["Female", "Male"][$gender]),
            "birthday" => fake()->dateTimeBetween("-80 years", "-20 years"),
            "gender" => $gender,
        ];
    }
}
