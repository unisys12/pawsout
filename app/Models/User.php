<?php

declare(strict_types=1);

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Spatie\SimpleExcel\SimpleExcelWriter;

final class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Organization a user belongs to
     *
     * @return BelongsTo<Organization,$this>
     */
    public function organization(): BelongsTo
    {
        return $this->belongsTo(Organization::class);
    }

    /**
     * A user can be a foster
     *
     * @return HasOne<Foster, $this>
     */
    public function foster(): HasOne
    {
        return $this->hasOne(Foster::class);
    }

    /**
     * Export all animals to a CSV file
     *
     * File types supported are: "csv", "xlsx".
     */
    public function exportAnimals(string $ext = 'csv'): SimpleExcelWriter
    {
        $animals = Animal::all();

        $writer = SimpleExcelWriter::create(
            /**
             * @Todo: Fix this issue related to calling $this->organization->name causing error property.nonObject
             */
            Storage::disk('local')
                /** @phpstan-ignore property.nonObject */
                ->path(Str::slug($this->organization->name).'-'.Date::now()->toDateString().'-animals.'.$ext)
        );

        if ($animals->isNotEmpty()) {
            $writer->addHeader(array_keys($animals->first()->toArray()));
            $animals->each(function (Animal $animal) use ($writer): void {
                $writer->addRow($animal->toArray());
            });
        }

        $writer->close();

        return $writer;
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'immutable_datetime',
            'password' => 'hashed',
        ];
    }
}
