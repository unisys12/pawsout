<?php

declare(strict_types=1);

namespace App\Enums;

enum AgeGroup: string
{
    case Puppy = 'Puppy';
    case Adolescent = 'Adolescent';
    case Young_Adult = 'Young Adult';
    case Older_Adult = 'Older Adult';
    case Senior = 'Senior';

    /**
     * Determine the age group based on the age of the animal
     * by passing the year of age.
     *
     * ex: `AgeGroup::getGroup(4) // Young `
     */
    public static function getGroup(int $age): string
    {
        return match (true) {
            $age < 1 => self::Puppy->value,
            $age > 1 && $age < 3 => self::Adolescent->value,
            $age > 3 && $age < 7 => self::Young_Adult->value,
            $age > 7 && $age < 11 => self::Older_Adult->value,
            $age > 11 => self::Senior->value,
            default => 'No Match Found!'
        };
    }
}
