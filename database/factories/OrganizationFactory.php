<?php

declare(strict_types=1);

namespace Database\Factories;

use Bluemmb\Faker\PicsumPhotosProvider;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Organization>
 */
final class OrganizationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $this->faker->addProvider(new PicsumPhotosProvider($this->faker));

        return [
            'name' => $this->faker->unique()->company,
            'address' => $this->faker->streetAddress,
            'city' => $this->faker->city,
            'state' => $this->faker->stateAbbr,
            'zip' => $this->faker->postcode,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'website' => $this->faker->unique()->url,
            'logo_path' => $this->faker->imageUrl(300, 300, true),
        ];
    }
}
