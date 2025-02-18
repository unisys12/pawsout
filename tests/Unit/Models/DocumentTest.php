<?php

declare(strict_types=1);

use App\Models\Animal;
use App\Models\Document;

test('to array', function () {
    $animal = Animal::factory()->create()->refresh();
    $doc = Document::factory()
        ->for($animal, 'documentable')
        ->create()
        ->refresh();

    expect(array_keys($doc->toArray()))
        ->toBe([
            'id',
            'name',
            'path',
            'user_id',
            'documentable_type',
            'documentable_id',
            'created_at',
            'updated_at',
        ]);
});
