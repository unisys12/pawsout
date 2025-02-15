<?php

declare(strict_types=1);

use App\Models\Breed;

test('to array', function () {
    $breed = Breed::factory()->create()->refresh();

    expect(array_keys($breed->toArray()))
        ->toBe([
            'id',
            'name',
            'bred_for',
            'breed_group',
            'height',
            'image_url',
            'life_span',
            'origin',
            'temperament',
            'weight',
            'created_at',
            'updated_at',
        ]);
});

test('a breed belongs to many animals', function () {
    $breed = Breed::factory()->hasAnimals(2)->create()->refresh();

    expect(count(collect($breed->animals)))->toBe(2);
});
