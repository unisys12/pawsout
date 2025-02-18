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

// Why is this implementation different from the one in VeterinarianTest.php?
test('notes can be made on a visitation', function () {
    $visit = Visitation::factory()->hasNotes(2)->create()->refresh();

    expect(count($visit->notes()->get()))->toBe(2);
});

test('documents can be associated with an visit', function () {
    $visit = Visitation::factory()->hasDocuments(2)->create()->refresh();

    expect(count($visit->documents))->toBe(2);
});
