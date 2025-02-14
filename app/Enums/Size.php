<?php

declare(strict_types=1);

namespace App\Enums;

enum Size: string
{
    case Toy = 'Toy';
    case Small = 'Small';
    case Medium = 'Medium';
    case Large = 'Large';
    case Giant = 'Giant';

    public static function getStandardSize(int $weight): string
    {
        return match (true) {
            $weight <= 12 => self::Toy->value,
            $weight <= 22 => self::Small->value,
            $weight <= 57 => self::Medium->value,
            $weight <= 99 => self::Large->value,
            default => self::Giant->value
        };
    }

    public static function getImperialSize(int $weight): string
    {
        return match (true) {
            $weight <= 26 => self::Toy->value,
            $weight <= 48 => self::Small->value,
            $weight <= 125 => self::Medium->value,
            $weight <= 217 => self::Large->value,
            default => self::Giant->value
        };
    }
}
