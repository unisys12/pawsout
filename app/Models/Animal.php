<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\ActivityLevel;
use App\Enums\AgeGroup;
use App\Enums\CoatLength;
use App\Enums\EarType;
use App\Enums\EnergyLevel;
use App\Enums\ExerciseNeed;
use App\Enums\EyeColor;
use App\Enums\FenceNeed;
use App\Enums\Gender;
use App\Enums\GroomingNeed;
use App\Enums\OwnerExperience;
use App\Enums\Reaction;
use App\Enums\SheddingLevel;
use App\Enums\Size;
use App\Enums\TailType;
use App\Enums\Training;
use App\Enums\VocalLevel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

final class Animal extends Model implements HasMedia
{
    /** @use HasFactory<\Database\Factories\AnimalFactory> */
    use HasFactory;

    /** @use InteractsWithMedia<\Spatie\MediaLibrary\MediaCollections\Models\Media> */
    use InteractsWithMedia;

    /**
     * The media collections for the model
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('animal_images');
    }

    /**
     * An Animal can have many breeds through secondary_breed_id
     *
     * @return BelongsToMany<Breed, $this>
     */
    public function breeds(): BelongsToMany
    {
        return $this->belongsToMany(Breed::class); // @phpstan-ignore-line
    }

    /**
     * A animal belongs to a species
     *
     * @return BelongsTo<Species, $this>
     */
    public function species(): BelongsTo
    {
        return $this->belongsTo(Species::class);
    }

    /**
     * A animal belongs to a status
     *
     * @return BelongsTo<Status, $this>
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }

    /**
     * A animal will have many weights AnimalWeight
     *
     * @return HasMany<AnimalWeight, $this>
     */
    public function weights(): HasMany
    {
        return $this->hasMany(AnimalWeight::class);
    }

    /**
     * A animal can be adopted more than once.
     * This is being put into place for the
     * future support of the returning
     * of an animal, which will occur.
     *
     * @return BelongsToMany<Adopter, $this>
     */
    public function adopters(): BelongsToMany
    {
        return $this->belongsToMany(Adopter::class); // @phpstan-ignore-line
    }

    /**
     * All scheduled for visitations for an animal
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
     * Get all of an animals notes
     *
     * @return MorphMany<Note, $this>
     */
    public function notes(): MorphMany
    {
        return $this->morphMany(Note::class, 'noteable');
    }

    /**
     * Get all of an Animals documents
     *
     * @return MorphMany<Document, $this>
     */
    public function documents(): MorphMany
    {
        return $this->morphMany(Document::class, 'documentable');
    }

    /**
     * Get all Animals with a Foster
     *
     * @return BelongsTo<Foster, $this>
     */
    public function foster(): BelongsTo
    {
        return $this->belongsTo(Foster::class);
    }

    /**
     * Attributes that should be cast
     *
     * @return array<string, mixed>
     */
    protected function casts(): array
    {
        return [
            'gender' => Gender::class,
            'age_group' => AgeGroup::class,
            'size_group' => Size::class,
            'eye_color' => EyeColor::class,
            'coat_length' => CoatLength::class,
            'ear_type' => EarType::class,
            'tail_type' => TailType::class,
            'energy_level' => EnergyLevel::class,
            'exercise_need' => ExerciseNeed::class,
            'activity_level' => ActivityLevel::class,
            'vocal_level' => VocalLevel::class,
            'fence_need' => FenceNeed::class,
            'training_level' => Training::class,
            'owner_experience' => OwnerExperience::class,
            'shedding_level' => SheddingLevel::class,
            'grooming_need' => GroomingNeed::class,
            'special_needs' => 'boolean',
            'good_with_kids' => Reaction::class,
            'good_with_men' => Reaction::class,
            'good_with_woman' => Reaction::class,
            'good_with_physical_disabilities' => Reaction::class,
            'good_with_mental_disabilities' => Reaction::class,
            'good_with_medical_disorders' => Reaction::class,
            'new_people_reaction' => Reaction::class,
        ];
    }
}
