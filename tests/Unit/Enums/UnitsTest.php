<?php

declare(strict_types=1);

namespace Tests\Unit\Enums;

test('unitsOfWeight returns an array of weight units', function () {
    $units = \App\Enums\Units::unitsOfWeight();

    expect($units)->toBeArray();
    expect($units)->toHaveCount(4);
    expect($units[0]->value)->toContain('Gram');
    expect($units[1]->value)->toContain('Kilogram');
    expect($units[2]->value)->toContain('Ounce');
    expect($units[3]->value)->toContain('Pound');
});

test('unitsOfTime returns an array of time units', function () {
    $units = \App\Enums\Units::unitsOfTime();

    expect($units)->toBeArray();
    expect($units)->toHaveCount(4);
    expect($units[0]->value)->toContain('Day');
    expect($units[1]->value)->toContain('Week');
    expect($units[2]->value)->toContain('Month');
    expect($units[3]->value)->toContain('Year');
});

test('unitsOfMeasure returns an array of measure units', function () {
    $units = \App\Enums\Units::unitsOfMeasure();

    expect($units)->toBeArray();
    expect($units)->toHaveCount(4);
    expect($units[0]->value)->toContain('Centimeter');
    expect($units[1]->value)->toContain('Meter');
    expect($units[2]->value)->toContain('Inch');
    expect($units[3]->value)->toContain('Foot');
});

test('convertPoundsToKilo converts pounds to kilograms', function () {
    $weightInPounds = 45;
    $expectedWeightInKilos = 99;

    $convertedWeight = \App\Enums\Units::convertPoundsToKilo($weightInPounds);

    expect($convertedWeight)->toBe($expectedWeightInKilos);
});

test('convertKiloToPounds converts kilograms to pounds', function () {
    $weightInKilos = 100;
    $expectedWeightInPounds = 45;

    $convertedWeight = \App\Enums\Units::convertKiloToPounds($weightInKilos);

    expect($convertedWeight)->toBe($expectedWeightInPounds);
});
