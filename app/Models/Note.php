<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

final class Note extends Model
{
    /** @use HasFactory<\Database\Factories\NoteFactory> */
    use HasFactory;

    /**
     * Get the parent noteable model _(Animal, Veterinarian, Adopter, Visitation)_.
     *
     * @return MorphTo<Model, $this>
     */
    public function noteable(): MorphTo
    {
        return $this->morphTo();
    }
}
