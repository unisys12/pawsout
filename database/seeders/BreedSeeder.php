<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

final class BreedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $response = Http::withHeader('x-api-key', config('env.DOG_API'))->get('https://api.thedogapi.com/v1/breeds');

        $breeds = json_decode($response->body());

        foreach ($breeds as $breed) {

            DB::table('breeds')->insert([
                'name' => $breed->name,
                'bred_for' => $breed->bred_for ?? '',
                'breed_group' => $breed->breed_group ?? '',
                'height' => $breed->height->imperial,
                'image_url' => $breed->image->url,
                'life_span' => $breed->life_span,
                'origin' => $breed->origin ?? '',
                'temperament' => $breed->temperament ?? '',
                'weight' => $breed->weight->imperial,
            ]);
        }
        echo "\nSeeded ".count($breeds)." breeds.\n";
    }
}
