<?php

declare(strict_types=1);

use App\Services\ChipnDoodleService;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Http;

test('if the animal has a microchip, we can search for a pet by its ID', function () {
    $fakeResponse = file_get_contents(base_path().'/tests/Fixtures/FakePetSearch.json');
    Http::fake(
        [
            'https://api.chipndoodle.com/searches' => Http::response($fakeResponse, 200),
        ]
    );

    $chipID = '933000321175791';

    ChipnDoodleService::petSearch($chipID);

    Http::assertSent(function (Request $request) {
        return $request->url() === 'https://api.chipndoodle.com/searches' &&
            $request['token'] === config('services.chipndoodle.token') &&
            $request['uid'] === '933000321175791';
    });
});

test('providing an incorrect chip ID will result in a status code 400 (Bad Request)', function () {
    Http::fake(
        [
            'https://api.chipndoodle.com/searches' => Http::response(['message' => 'Chip numbers are either 15 or 10 characters long, please try again'], 400),
        ]
    );

    $chipID = '1234567';

    $request = ChipnDoodleService::petSearch($chipID);

    expect($request['status'])->toBe(400);
    expect($request['message'])->toBe('Chip numbers are either 15 or 10 characters long, please try again');
});

test('we can get a list of microchip providers without providing a country code', function () {
    $fakeResponse = file_get_contents(
        base_path().'/tests/Fixtures/FakeProviderLookUp.json'
    );

    Http::fake(
        ['https://api.chipndoodle.com/providers' => Http::response($fakeResponse, 200)]
    );

    ChipnDoodleService::providers();

    Http::assertSent(function (Request $request) {
        return $request->url() === 'https://api.chipndoodle.com/providers?country=US';
    });
});

test('provider lookup fails with an error message and status code', function () {
    Http::fake(
        [
            'https://api.chipndoodle.com/providers?country=US' => Http::response(['message' => 'API temporarily unavailable'], 503),
        ]
    );

    $response = ChipnDoodleService::providers();

    expect($response)->toBeArray();
    expect($response['status'])->toBe(503);
    expect($response['message'])->toBe('API temporarily unavailable');
});
