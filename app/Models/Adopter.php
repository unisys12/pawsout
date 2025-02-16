<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
        return $this->belongsToMany(Animal::class);
    }
}
