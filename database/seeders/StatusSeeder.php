<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

final class StatusSeeder extends Seeder
{
    /**
     * Setup default Status entries to get started.
     */
    public function run(): void
    {
        $labels = ['Available', 'Hold', 'Adopted', 'Pending', 'Medical', 'Intake'];

        foreach ($labels as $label) {
            DB::table('statuses')->insert([$label]);
        }
    }
}
