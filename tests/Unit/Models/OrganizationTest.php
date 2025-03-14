<?php

declare(strict_types=1);

use App\Models\Organization;
use App\Models\User;

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

test('an organization can have many users', function () {
    $org = Organization::factory()->has(User::factory(2))->create()->refresh();

    expect(count($org->users))->toBe(2);
});

test('documents can be associated with an org', function () {
    $org = Organization::factory()->hasDocuments(2)->create()->refresh();

    expect(count($org->documents))->toBe(2);
});
