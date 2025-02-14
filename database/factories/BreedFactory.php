<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Breed>
 */
final class BreedFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->word(),
            'bred_for' => $this->faker->sentence(),
            'breed_group' => $this->faker->unique()->word(),
            'height' => $this->faker->randomDigit(),
            'image_url' => $this->faker->url(),
            'life_span' => $this->faker->word(),
            'origin' => $this->faker->word(),
            'temperament' => $this->faker->word(),
            'weight' => $this->faker->word(),
        ];
    }
}
