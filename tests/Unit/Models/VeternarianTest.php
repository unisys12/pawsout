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
