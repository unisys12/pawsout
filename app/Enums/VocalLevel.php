<?php

declare(strict_types=1);

namespace App\Enums;

enum VocalLevel: string
{
    case Quiet = 'Quiet';
    case Some = 'Some';
    case Lots = 'Lots';
}
