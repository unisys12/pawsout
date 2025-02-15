<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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
}
