<?php

declare(strict_types=1);

use App\Models\Status;

test('to array', function () {
    $status = Status::factory()->create()->refresh();

    expect(array_keys($status->toArray()))
        ->toBe([
            'id',
            'label',
            'created_at',
            'updated_at',
        ]);
});

test('a status can belong to many animals', function () {
    $status = Status::factory()->hasAnimals(2)->create()->refresh();

    expect(count(collect($status->animals)))->toBe(2);
});
