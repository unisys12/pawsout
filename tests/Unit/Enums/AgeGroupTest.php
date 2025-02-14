<?php

declare(strict_types=1);

namespace Tests\Unit\Enums;

test('it returns the correct age group for a given age', function (int $age, string $expectedGroup) {

    expect(\App\Enums\AgeGroup::getGroup($age))->toBe($expectedGroup);
})->with([
    [0, 'Puppy'],
    [2, 'Adolescent'],
    [4, 'Young Adult'],
    [8, 'Older Adult'],
    [12, 'Senior'],
]);
