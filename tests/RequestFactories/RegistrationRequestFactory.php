<?php

declare(strict_types=1);

namespace Tests\RequestFactories;

use Worksome\RequestFactories\RequestFactory;

final class RegistrationRequestFactory extends RequestFactory
{
    public function definition(): array
    {
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
