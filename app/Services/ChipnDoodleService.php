<?php

declare(strict_types=1);

namespace App\Services;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

final class ChipnDoodleService
{
    /**
     * Search for a pet by its chip ID.
     *
     * @return Response|array<string, mixed>
     */
    public static function petSearch(string $chipID): Response|array
    {
        $request = Http::connectTimeout(60)->asForm()->post(
            'https://api.chipndoodle.com/searches',
            [
                'token' => config('services.chipndoodle.token'),
                'uid' => $chipID,
            ]
        );

        if ($request->failed()) {
            return ['message' => $request['message'], 'status' => $request->status()];
        }

        return $request;
    }

    /**
     * Get a list of microchip vendors for a given country.
     *
     * Default country code is US
     *
     * @return Response|array<string, mixed>
     */
    public static function providers(string $country_code = 'US'): Response|array
    {
        $request = Http::withHeader('token', config('services.chipndoodle.token'))
            ->get('https://api.chipndoodle.com/providers', ['country' => $country_code]);

        if ($request->failed()) {
            return ['message' => $request['message'], 'status' => $request->status()];
        }

        return $request;
    }
}
