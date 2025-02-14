<?php

declare(strict_types=1);

use App\Models\Species;

test('to array', function () {
    $species = Species::factory()->create()->refresh();

    expect(array_keys($species->toArray()))
        ->toBe(['id', 'label', 'created_at', 'updated_at']);
});
