<?php

declare(strict_types=1);

namespace App\Enums;

enum FenceNeed: string
{
    case Not_Required = 'Not Required';
    case Any = 'Any';
    case Three = '3 ft';
    case Six = '6 ft';
}
