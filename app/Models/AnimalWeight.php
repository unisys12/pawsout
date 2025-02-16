<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class AnimalWeight extends Model
{
    /** @use HasFactory<\Database\Factories\AnimalWeightFactory> */
    use HasFactory;
}
