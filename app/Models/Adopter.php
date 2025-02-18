<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
        return $this->belongsToMany(Animal::class);
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
}
