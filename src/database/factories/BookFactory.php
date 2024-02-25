<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Ganre;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => fake()->sentence(2),
            "description" => fake()->sentence(50),
            "pages" => fake()->numberBetween(0, 1000),
            "author_id" => Author::query()->get()->random()->id,
            "ganre_id" => Ganre::query()->get()->random()->id,
        ];
    }
}
