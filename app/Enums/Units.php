<?php

declare(strict_types=1);

namespace App\Enums;

/**
 * Attempting to catalog as many units of measure that might be needed.
 * Currently contains:
 * - Weights
 * - Size
 * - Time
 */
enum Units: string
{
    case Centimeter = 'Centimeter';
    case Meter = 'Meter';
    case Inch = 'Inch';
    case Foot = 'Foot';
    case Gram = 'Gram';
    case Kilogram = 'Kilogram';
    case Ounce = 'Ounce';
    case Pound = 'Pound';
    case Day = 'Day';
    case Week = 'Week';
    case Month = 'Month';
    case Year = 'Year';

    /**
     * @return array<int, Units>
     */
    public static function unitsOfWeight(): array
    {
        return [self::Gram, self::Kilogram, self::Ounce, self::Pound];
    }

    /**
     * @return array<int, Units>
     */
    public static function unitsOfTime(): array
    {
        return [self::Day, self::Week, self::Month, self::Year];
    }

    /**
     * @return array<int, Units>
     */
    public static function unitsOfMeasure(): array
    {
        return [self::Centimeter, self::Meter, self::Inch, self::Foot];
    }

    public static function convertPoundsToKilo(int $weight): int
    {
        return (int) ($weight * 2.2);
    }

    public static function convertKiloToPounds(int $weight): int
    {
        return (int) ($weight / 2.2);
    }
}
