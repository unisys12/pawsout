<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Models\Organization;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Inertia\Response;
use Inertia\ResponseFactory;

final class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response|ResponseFactory
    {
        $org = Organization::first();

        return inertia('Organization/Index', ['org' => $org]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response|ResponseFactory
    {
        return inertia('Organization/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegistrationRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $org = Organization::create($data);

        return to_route('dashboard', ['org' => $org])->with('message', 'Organization ' . $org->name . ' created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response | ResponseFactory
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response | ResponseFactory
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RegistrationRequest $request, string $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
    }
}
