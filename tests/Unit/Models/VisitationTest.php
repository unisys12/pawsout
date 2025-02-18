<?php

declare(strict_types=1);

use App\Models\Visitation;

test('to array', function () {
    $visit = Visitation::factory()->create()->refresh();
    expect(array_keys($visit->toArray()))
        ->toBe([
            'id',
            'adopter_id',
            'animal_id',
            'scheduled_at',
            'status',
            'notes',
            'user_id',
            'created_at',
            'updated_at',
        ]);
});

test('a visitation can be scheduled for an animal', function () {
    $visit = Visitation::factory()
        ->forAnimal(['name' => 'Crystal'])
        ->forAdopter(['name' => 'Barney'])
        ->create()
        ->refresh();

    expect($visit->animal->name)->toBe('Crystal');
    expect($visit->adopter->name)->toBe('Barney');
});
