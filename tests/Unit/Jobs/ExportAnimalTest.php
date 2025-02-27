<?php

declare(strict_types=1);

use App\Jobs\ExportAnimals;
use App\Models\Animal;
use App\Models\Organization;
use App\Models\User;
use Illuminate\Support\Facades\Queue;

test('the export animals job is dispatched', function () {
    $user = User::factory()->for(
        Organization::factory()->state(
            ['name' => 'For The Puppies Foundation']
        )
    )->create()->refresh();

    Animal::factory()->count(3)->create();

    Queue::fake();

    $user->exportAnimals('csv');

    Queue::assertPushed(ExportAnimals::class);
});
