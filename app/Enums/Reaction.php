<?php

declare(strict_types=1);

namespace App\Enums;

enum Reaction: string
{
    case Yes = 'Yes';
    case No = 'No';
    case unknown = 'Unknown';
}
