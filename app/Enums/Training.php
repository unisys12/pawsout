<?php

declare(strict_types=1);

namespace App\Enums;

// 'Needs training', 'Has basic training', 'well trained'
enum Training: string
{
    case Needs_Training = 'Needs Training';
    case Basic_Training = 'Has Basic Training';
    case Well_Trained = 'Well Trained';
}
