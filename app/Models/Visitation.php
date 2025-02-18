<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

final class Visitation extends Model
{
    /** @use HasFactory<\Database\Factories\VisitationFactory> */
    use HasFactory;

    /**
     * That adopter that wants to meet an animal
     *
     * @return BelongsTo<Adopter, $this>
     */
    public function adopter(): BelongsTo
    {
        return $this->belongsTo(Adopter::class);
    }

    /**
     * That animal the adopter wants to meet
     *
     * @return BelongsTo<Animal, $this>
     */
    public function animal(): BelongsTo
    {
        return $this->belongsTo(Animal::class);
    }

    /**
     * Scope a query to only include upcoming visitations.
     *
     * Upcoming visitations are those that:
     * - Have a scheduled date in the future
     * - Have a 'scheduled' status
     *
     * Results are ordered by scheduled date ascending (earliest first).
     *
     * @param  Builder<Visitation>  $query
     * @return Builder<Visitation>
     */
    public function scopeUpcoming(Builder $query): Builder
    {
        return $query->where('scheduled_at', '>', now())
            ->where('status', 'scheduled')
            ->orderBy('scheduled_at');
    }

    /**
     * Scope a query to only include previous visitations.
     *
     * Previous visitations are those that either:
     * - Have a scheduled date in the past
     * - OR have a 'completed' status
     *
     * Results are ordered by scheduled date descending (most recent first).
     *
     * @param  Builder<Visitation>  $query
     * @return Builder<Visitation>
     */
    public function scopePrevious(Builder $query): Builder
    {
        return $query->where('scheduled_at', '<', now())
            ->orWhere('status', 'completed')
            ->orderByDesc('scheduled_at');
    }

    /**
     * Get related to a Visitation
     *
     * @return MorphMany<Note, $this>
     */
    public function notes(): MorphMany
    {
        return $this->morphMany(Note::class, 'noteable');
    }

    /**
     * Get all of an Visitations documents
     *
     * @return MorphMany<Document, $this>
     */
    public function documents(): MorphMany
    {
        return $this->morphMany(Document::class, 'documentable');
    }

    /**
     * Attributes that should be cast
     *
     * @return array<string, mixed>
     */
    protected function casts(): array
    {
        return ['scheduled_at' => 'datetime'];
    }
}
