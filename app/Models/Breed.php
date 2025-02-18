<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

final class Breed extends Model
{
    /** @use HasFactory<\Database\Factories\BreedFactory> */
    use HasFactory;

    /**
     * A Breed can belong to Many Animals
     *
     * @return BelongsToMany<Animal, $this>
     */
    public function animals(): BelongsToMany
    {
        return $this->belongsToMany(Animal::class);
    }

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
