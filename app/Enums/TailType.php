<?php

declare(strict_types=1);

namespace App\Enums;

// 'Bare', 'Bob', 'Curled', 'Docked', 'Kinked', 'Long', 'Missing', 'Short'
enum TailType: string
{
    case Bare = 'Bare';
    case Bob = 'Bob';
    case Curled = 'Curled';
    case Docked = 'Docked';
    case Kinked = 'Kinked';
    case Long = 'Long';
    case Missing = 'Missing';
    case Short = 'Short';
}
