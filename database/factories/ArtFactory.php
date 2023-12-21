<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Art>
 */
class ArtFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->words(3, true),
            'description' => fake()->paragraph,
            'artist_name' => fake()->name,
            'poster_id' => fake()->numberBetween(1, 5),
            'image_url' => fake()->imageUrl(),
            'movement' => fake()->randomElement(['Abstract', 'Figurative', 'Geometric', 'Minimalist', 'Nature', 'Pop', 'Portraiture', 'Still Life', 'Surrealist', 'Typography', 'Urban']),
            'collector_id' => null,
        ];
    }
}
