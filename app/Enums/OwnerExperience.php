<?php

declare(strict_types=1);

namespace App\Enums;

enum OwnerExperience: string
{
    case None = 'None';
    case Species = 'Species';
    case Breed = 'Breed';
}
