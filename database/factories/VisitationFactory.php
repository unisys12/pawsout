<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\VisitStatus;
use App\Helpers\PickRandomEnum;
use App\Models\Adopter;
use App\Models\Animal;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Visitation>
 */
final class VisitationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'adopter_id' => Adopter::factory()->create(),
            'animal_id' => Animal::factory()->create(),
            'scheduled_at' => fake()->dateTime(),
            'status' => PickRandomEnum::fromEnum(VisitStatus::cases()),
            'notes' => fake()->paragraph(),
            'user_id' => User::factory()->create(),
        ];
    }
}
