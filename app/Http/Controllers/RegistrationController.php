<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Models\Organization;
use Inertia\Response;
use Inertia\ResponseFactory;

final class RegistrationController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(RegistrationRequest $request): Response|ResponseFactory
    {
        $data = $request->validated();

        $org = Organization::create($data);

        return inertia('/dashboard', ['org' => $org]);
    }
}
