<?php

declare(strict_types=1);

use App\Models\Adopter;
use Illuminate\Support\Carbon;

test('to array', function () {
    $adopter = Adopter::factory()->create()->refresh();

    expect(array_keys($adopter->toArray()))
        ->toBe([
            'id',
            'name',
            'address',
            'city',
            'state',
            'zip',
            'phone',
            'email',
            'application_path',
            'has_adopted',
            'animal_id',
            'created_at',
            'updated_at',
        ]);
});

test('adopter can adopt an animal', function () {
    $adopter = Adopter::factory()->hasAnimals(2)->create()->refresh();

    expect(count($adopter->animals))->toBe(2);
});

test('adopter can be scheduled for a visit with an animal', function () {
    $adopter = Adopter::factory()->hasVisitations(2)->create()->refresh();

    expect(count($adopter->visitations))->toBe(2);
});

test('we can view all previous visits with an adopter', function () {
    $adopter = Adopter::factory()
        ->hasVisitations(2, [
            'scheduled_at' => Carbon::now()->subDays(2),
        ])->create()->refresh();

    expect(count($adopter->previous_visits()->get()))->toBe(2);
});

test('we can view all upcoming visits with an adopter', function () {
    $adopter = Adopter::factory()
        ->hasVisitations(2, [
            'scheduled_at' => now()->addDays(2),
            'status' => 'scheduled',
        ])->create()->refresh();

    expect(count($adopter->upcoming_visits()->get()))->toBe(2);
});

test('notes can be made on a adopter', function () {
    $adopter = Adopter::factory()->hasNotes(2)->create()->refresh();

    expect(count($adopter->notes))->toBe(2);
});
