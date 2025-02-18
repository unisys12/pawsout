<?php

declare(strict_types=1);

use App\Models\Veterinarian;

test('to array', function () {
    $vet = Veterinarian::factory()->create()->refresh();

    expect(array_keys($vet->toArray()))
        ->toBe([
            'id',
            'name',
            'address',
            'city',
            'state',
            'zip',
            'phone',
            'email',
            'website',
            'hours',
            'created_at',
            'updated_at',
        ]);
});

test('notes can be made on a vet', function () {
    $vet = Veterinarian::factory()->hasNotes(2)->create()->refresh();

    expect(count($vet->notes))->toBe(2);
});

test('documents can be associated with an vet', function () {
    $vet = Veterinarian::factory()->hasDocuments(2)->create()->refresh();

    expect(count($vet->documents))->toBe(2);
});
