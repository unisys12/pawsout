<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

final class Veterinarian extends Model
{
    /** @use HasFactory<\Database\Factories\VeterinarianFactory> */
    use HasFactory;

    /**
     * Get all of an animals notes
     *
     * @return MorphMany<Note, $this>
     */
    public function notes(): MorphMany
    {
        return $this->morphMany(Note::class, 'noteable');
    }
}
