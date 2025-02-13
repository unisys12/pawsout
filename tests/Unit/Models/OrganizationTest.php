<?php

declare(strict_types=1);

use App\Models\Organization;

test('to array', function () {
    $org = Organization::factory()->create()->refresh();

    expect(array_keys($org->toArray()))
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
            'logo_path',
            'created_at',
            'updated_at',
        ]);
});
