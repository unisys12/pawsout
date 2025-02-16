<?php

declare(strict_types=1);

use App\Models\Adopter;

test('to array', function () {
    $adopter = Adopter::factory()->create()->refresh();

    expect(array_keys($adopter->toArray()))
        ->toBe([
            'id',
            'name',
            'address',
            'city',
            'state',
            'zip',
            'phone',
            'email',
            'application_path',
            'has_adopted',
            'animal_id',
            'created_at',
            'updated_at',
        ]);
});

test('adopter can adopt an animal', function () {
    $adopter = Adopter::factory()->hasAnimals(2)->create()->refresh();

    expect(count($adopter->animals))->toBe(2);
});
