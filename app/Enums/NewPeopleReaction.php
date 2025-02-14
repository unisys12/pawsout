<?php

declare(strict_types=1);

namespace App\Enums;

enum NewPeopleReaction: string
{
    case Friendly = 'Friendly';
    case Cautious = 'Cautious';
    case Protective = 'Protective';
    case Aggressive = 'Aggressive';
}
