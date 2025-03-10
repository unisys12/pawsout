<?php

declare(strict_types=1);

use App\Http\Requests\RegistrationRequest;
use App\Models\Organization;

it('can create a new organization when correct data is passed', function () {
    $orgFactory = RegistrationRequest::factory()->create();

    $this->post('/register', $orgFactory)->assertValid();
});

it('can create a new organization when valid data is passed', function () {
    $orgFactory = RegistrationRequest::factory()->create();

    $this->post('/register', $orgFactory);

    $org = Organization::first();

    expect($org->id)->toBe(1);
});
