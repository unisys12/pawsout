<?php

declare(strict_types=1);

use App\Models\Animal;
use App\Models\Organization;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

test('user can be a foster', function () {
    $user = User::factory()->hasFoster(['zip' => '38834'])->create()->refresh();
    expect($user->foster->zip)->toBe('38834');
});

test('user can export all animals to a file', function () {
    $user = User::factory()->for(
        Organization::factory()->state(
            ['name' => 'For The Puppies Foundation']
        )
    )->create()->refresh();

    Auth::login($user);

    Animal::factory()->count(3)->create();

    $csvWriter = $user->exportAnimals('csv');
    $excelWriter = $user->exportAnimals('xlsx');
    $defaultWriter = $user->exportAnimals();

    Storage::disk('local')->assertExists('for-the-puppies-foundation-'.now()->toDateString().'-animals.csv');
    Storage::disk('local')->assertExists('for-the-puppies-foundation-'.now()->toDateString().'-animals.xlsx');
});
