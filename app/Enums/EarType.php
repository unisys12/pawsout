<?php

declare(strict_types=1);

namespace App\Enums;

enum EarType: string
{
    case Cropped = 'Cropped';
    case Droopy = 'Droopy';
    case Erect = 'Erect';
    case Long = 'Long';
    case Missing = 'Missing';
    case Notched = 'Notched';
    case Rose = 'Rose';
    case Semi_Erect = 'Semi-Erect';
    case Tipped = 'Tipped';
    case Natural = 'Natural';
}
