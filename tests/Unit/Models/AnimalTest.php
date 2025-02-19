<?php

declare(strict_types=1);

use App\Models\Animal;
use App\Models\AnimalWeight;
use App\Models\Breed;
use App\Models\User;
use Carbon\Carbon;

test('to array', function () {
    $animal = Animal::factory()->create()->refresh();

    expect(array_keys($animal->toArray()))
        ->toBe([
            'id',
            'name',
            'profile_path',
            'gender',
            'status_id',
            'species_id',
            'mixed',
            'date_of_birth',
            'age_group',
            'weight',
            'size_group',
            'eye_color',
            'coat_description',
            'coat_length',
            'markings',
            'ear_type',
            'tail_type',
            'energy_level',
            'exercise_need',
            'activity_level',
            'vocal_level',
            'fence_need',
            'training_level',
            'owner_experience',
            'shedding_level',
            'grooming_need',
            'special_needs',
            'special_need_description',
            'good_with_kids',
            'good_with_men',
            'good_with_woman',
            'good_with_physical_disabilities',
            'good_with_mental_disabilities',
            'good_with_medical_disorders',
            'new_people_reaction',
            'created_at',
            'updated_at',
            'foster_id',
        ]);
});

test('an animal can have many breeds', function () {
    $animal = Animal::factory()
        ->hasBreeds(2)
        ->create()
        ->refresh();

    expect(count(collect($animal->breeds)))->toBe(2);
});

test('an animal should be related to a species', function () {
    $animal = Animal::factory()
        ->forSpecies(['label' => 'Canine'])
        ->create()
        ->refresh();

    expect($animal->species->label)->toBe('Canine');
});

test('an animal should have a status', function () {
    $animal = Animal::factory()
        ->forStatus(['label' => 'Available'])
        ->create()
        ->refresh();

    expect($animal->status->label)->toBe('Available');
});

test('we can track an animals weight over time', function () {
    $animal = Animal::factory()->create([
        'weight' => 10,
    ])->refresh();

    // After adding a animal, the initial weight should be saved
    $aw1 = AnimalWeight::create([
        'animal_id' => $animal->id,
        'weight' => $animal->weight,
    ]);

    expect(count(collect($animal->weights)))->toBe(1);

    // Later, we will update the animals weight to a new weight.
    $animal->weight = 12;

    $aw2 = AnimalWeight::create([
        'animal_id' => $animal->id,
        'weight' => $animal->weight,
    ]);

    // And we should be able to access the weights for display
    $weights = AnimalWeight::where('animal_id', $animal->id)->get();

    expect(count($weights))->toBe(2);
});

test('that an animal can be adopted by more than one person', function () {
    $animal = Animal::factory()->hasAdopters(2)->create()->refresh();
    expect(count($animal->adopters))->toBe(2);
});

test('that an animal can be scheduled for visitations', function () {
    $animal = Animal::factory()->hasVisitations(2)->create()->refresh();
    expect(count($animal->visitations))->toBe(2);
});

test('we can view all previous visits with an animal', function () {
    $animal = Animal::factory()
        ->hasVisitations(2, [
            'scheduled_at' => Carbon::now()->subDays(2),
        ])->create()->refresh();

    expect(count($animal->previous_visits()->get()))->toBe(2);
});

test('we can view all upcoming visits with an animal', function () {
    $animal = Animal::factory()
        ->hasVisitations(2, [
            'scheduled_at' => now()->addDays(2),
            'status' => 'scheduled',
        ])->create()->refresh();

    expect(count($animal->upcoming_visits()->get()))->toBe(2);
});

test('notes can be made on a animal', function () {
    $animal = Animal::factory()->hasNotes(2)->create()->refresh();
    expect(count($animal->notes))->toBe(2);
});

test('documents can be associated with an adopter', function () {
    $animal = Animal::factory()->hasDocuments(2)->create()->refresh();
    expect(count($animal->documents))->toBe(2);
});

test('a animal can have a foster', function () {
    $animal = Animal::factory()
        ->forFoster([
            'user_id' => User::factory()->create(['name' => 'John Doe']),
        ])
        ->create()
        ->refresh();
    expect($animal->foster->user->name)->toBe('John Doe');
});
