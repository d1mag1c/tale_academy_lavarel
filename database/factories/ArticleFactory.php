<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $rand = rand(0,1);

        return [
            'title' => fake()->text(20),
            'slug' => fake()->text(30),
            'text' => fake()->paragraph(20),
            'image' => $rand ? fake()->imageUrl : null,
            'publication_date' => fake()->dateTime
        ];
    }
}
