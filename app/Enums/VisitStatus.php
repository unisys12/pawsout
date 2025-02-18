<?php

declare(strict_types=1);

namespace App\Enums;

enum VisitStatus: string
{
    case Scheduled = 'Scheduled';
    case Completed = 'Completed';
    case Canceled = 'Canceled';
}
