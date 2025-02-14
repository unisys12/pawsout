<?php

declare(strict_types=1);

namespace App\Enums;

enum ActivityLevel: string
{
    case Not_Active = 'Not Active';
    case Slightly_Active = 'Slightly Active';
    case Moderately_Active = 'Moderately Active';
    case Highly_Active = 'Highly Active';
}
