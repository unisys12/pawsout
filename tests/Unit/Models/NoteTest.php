<?php

declare(strict_types=1);

use App\Models\Animal;
use App\Models\Note;

test('to array', function () {
    $animal = Animal::factory()->create()->refresh();
    $note = Note::factory()
        ->for($animal, 'noteable')
        ->create()
        ->refresh();

    expect(array_keys($note->toArray()))
        ->toBe([
            'id',
            'body',
            'user_id',
            'noteable_type',
            'noteable_id',
            'created_at',
            'updated_at',
        ]);
});
