<?php

declare(strict_types=1);

use App\Models\Organization;
use App\Models\User;

test('to array', function () {
    $user = User::factory()->create()->refresh();

    expect(array_keys($user->toArray()))
        ->toBe([
            'id',
            'name',
            'email',
            'email_verified_at',
            'organization_id',
            'created_at',
            'updated_at',
        ]);
});

test('user belongs to an organization', function () {
    $user = User::factory()->for(
        Organization::factory()->state(
            ['name' => 'For The Puppies Foundation']
        )
    )->create()->refresh();

    expect($user->organization->name)->toBe('For The Puppies Foundation');
});
