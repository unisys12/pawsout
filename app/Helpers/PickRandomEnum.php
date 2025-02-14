<?php

declare(strict_types=1);

namespace App\Helpers;

final class PickRandomEnum
{
    /**
     * Returns a random Enum value for the cases passed to it.
     *
     * @param  array<array, object>  $cases
     */
    public static function fromEnum(array $cases): mixed
    {
        // @phpstan-ignore property.notFound
        return $cases[array_rand($cases)]->value;
    }
}
