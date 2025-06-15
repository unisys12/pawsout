<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

final class Adopter extends Model
{
    /** @use HasFactory<\Database\Factories\AdopterFactory> */
    use HasFactory;

    /**
     * An adopter can adopt more than one animal
     *
     * @return BelongsToMany<Animal, $this>
     */
    public function animals(): BelongsToMany
    {
        return $this->belongsToMany(Animal::class); // @phpstan-ignore-line
    }

    /**
     * Visitations with an animal
     *
     * @return HasMany<Visitation, $this>
     */
    public function visitations(): HasMany
    {
        return $this->hasMany(Visitation::class);
    }

    /**
     * Previously scheduled visitations for an animal
     *
     * @return HasMany<Visitation, $this>
     */
    public function previous_visits(): HasMany
    {
        return $this->visitations()->previous();
    }

    /**
     * Upcoming scheduled visitations for an animal
     *
     * @return HasMany<Visitation, $this>
     */
    public function upcoming_visits(): HasMany
    {
        return $this->visitations()->upcoming();
    }

    /**
     * Get all of an Adopters notes
     *
     * @return MorphMany<Note, $this>
     */
    public function notes(): MorphMany
    {
        return $this->morphMany(Note::class, 'noteable');
    }

    /**
     * Get all of an Adopters documents
     *
     * @return MorphMany<Document, $this>
     */
    public function documents(): MorphMany
    {
        return $this->morphMany(Document::class, 'documentable');
    }
}
