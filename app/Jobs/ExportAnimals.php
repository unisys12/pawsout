<?php

declare(strict_types=1);

namespace App\Jobs;

use App\Models\Animal;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Spatie\SimpleExcel\SimpleExcelWriter;

final class ExportAnimals implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(private string $ext) {}

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $animals = Animal::all();

        $writer = SimpleExcelWriter::create(
            /**
             * @Todo: Fix this issue related to calling $this->organization->name causing error property.nonObject
             */
            Storage::disk('local')
                ->path(
                    Str::slug(
                        /** @phpstan-ignore-next-line */
                        Auth::user()->organization->name
                    ) . '-' . Date::now()->toDateString() . '-animals.' . $this->ext
                )
        );

        if ($animals->isNotEmpty()) {
            $writer->addHeader(array_keys($animals->first()->toArray()));
            $animals->each(function (Animal $animal) use ($writer): void {
                $writer->addRow($animal->toArray());
            });
        }

        $writer->close();
    }
}
