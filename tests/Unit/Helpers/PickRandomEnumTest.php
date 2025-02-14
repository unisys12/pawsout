<?php

declare(strict_types=1);

namespace Tests\Unit\Helpers;

use App\Enums\VocalLevel;
use App\Helpers\PickRandomEnum;

test('it picks a random enum value from a passed enum case', function () {
    $enumCases = VocalLevel::cases();
    $randomEnumValue = PickRandomEnum::fromEnum($enumCases);

    expect($randomEnumValue)->toBeStringBackedEnum();

});
