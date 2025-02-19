<?php

declare(strict_types=1);

use App\Models\Foster;

test('to array', function () {
    $foster = Foster::factory()->create()->refresh();
    expect(array_keys($foster->toArray()))
        ->toBe(['id', 'user_id', 'address', 'city', 'state', 'zip', 'phone', 'created_at', 'updated_at']);
});

test('a foster is associated with a user', function () {
    $foster = Foster::factory()->forUser(['name' => 'Barney'])->create()->refresh();
    expect($foster->user->name)->toBe('Barney');
});

test('a foster home can foster many dogs', function () {
    $foster = Foster::factory()->hasAnimals(3)->create()->refresh();
    expect(count($foster->animals))->toBe(3);
});

test('notes can be made on a foster', function () {
    $foster = Foster::factory()->hasNotes(2)->create()->refresh();
    expect(count($foster->notes))->toBe(2);
});

test('documents can be associated with a foster', function () {
    $foster = Foster::factory()->hasDocuments(2)->create()->refresh();
    expect(count($foster->documents))->toBe(2);
});
