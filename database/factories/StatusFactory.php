<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Status>
 */
final class StatusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, string>
     */
    public function definition(): array
    {
        return [
            'label' => fake()->word(),
        ];
    }
}
