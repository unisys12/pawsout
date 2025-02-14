<?php

declare(strict_types=1);

namespace Tests\Unit\Enums;

test('when passing a weight in pounds, the correct size group is returned', function (int $weight, string $expectedSize) {
    expect(\App\Enums\Size::getStandardSize($weight))->toBe($expectedSize);
})->with([
    [10, 'Toy'],
    [13, 'Small'],
    [23, 'Medium'],
    [60, 'Large'],
    [100, 'Giant'],
]);

test('when passing a weight in kilograms, the correct size group is returned', function (int $weight, string $expectedSize) {
    expect(\App\Enums\Size::getImperialSize($weight))->toBe($expectedSize);
})->with([
    [10, 'Toy'],
    [36, 'Small'],
    [98, 'Medium'],
    [198, 'Large'],
    [220, 'Giant'],
]);
