<?php

declare(strict_types=1);

use App\Models\Species;

test('to array', function () {
    $species = Species::factory()->create()->refresh();

    expect(array_keys($species->toArray()))
        ->toBe(['id', 'label', 'created_at', 'updated_at']);
});

test('a species can belong to many animals', function () {
    $species = Species::factory()->hasAnimals(2)->create()->refresh();

    expect(count(collect($species->animals)))->toBe(2);
});
