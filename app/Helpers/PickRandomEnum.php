<?php

declare(strict_types=1);

namespace App\Helpers;

final class PickRandomEnum
{
    public static function fromEnum(array $cases): string
    {
        return $cases[array_rand($cases)]->value;
    }
}
