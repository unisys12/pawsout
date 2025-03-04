<?php

declare(strict_types=1);

namespace App\Enums;

enum SheddingLevel: string
{
    case Low = 'Low';
    case Medium = 'Medium';
    case High = 'High';
}
