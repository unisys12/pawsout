<?php

declare(strict_types=1);

use App\Models\Animal;
use App\Models\Breed;

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
        ]);
});

test('an animal can have many breeds', function () {
    $animal = Animal::factory()
        ->has(Breed::factory()->count(2))
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
