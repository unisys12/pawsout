<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\ActivityLevel;
use App\Enums\AgeGroup;
use App\Enums\CoatLength;
use App\Enums\EarType;
use App\Enums\EnergyLevel;
use App\Enums\ExerciseNeed;
use App\Enums\EyeColor;
use App\Enums\FenceNeed;
use App\Enums\Gender;
use App\Enums\GroomingNeed;
use App\Enums\OwnerExperience;
use App\Enums\Reaction;
use App\Enums\SheddingLevel;
use App\Enums\Size;
use App\Enums\TailType;
use App\Enums\Training;
use App\Enums\VocalLevel;
use App\Helpers\PickRandomEnum;
use Bluemmb\Faker\PicsumPhotosProvider;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Animal>
 */
final class AnimalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        fake()->addProvider(new PicsumPhotosProvider($this->faker));

        return [
            'name' => fake()->name,
            'profile_path' => fake()->imageUrl(300, 300, true),
            'gender' => PickRandomEnum::fromEnum(Gender::cases()),
            'status_id' => '1',
            'species_id' => '1',
            'mixed' => random_int(0, 1),
            'date_of_birth' => fake()->date(),
            'age_group' => PickRandomEnum::fromEnum(AgeGroup::cases()),
            'weight' => random_int(10, 110),
            'size_group' => PickRandomEnum::fromEnum(Size::cases()),
            'eye_color' => PickRandomEnum::fromEnum(EyeColor::cases()),
            'coat_description' => fake()->sentence(),
            'coat_length' => PickRandomEnum::fromEnum(CoatLength::cases()),
            'markings' => fake()->sentence(),
            'ear_type' => PickRandomEnum::fromEnum(EarType::cases()),
            'tail_type' => PickRandomEnum::fromEnum(TailType::cases()),
            'energy_level' => PickRandomEnum::fromEnum(EnergyLevel::cases()),
            'exercise_need' => PickRandomEnum::fromEnum(ExerciseNeed::cases()),
            'activity_level' => PickRandomEnum::fromEnum(ActivityLevel::cases()),
            'vocal_level' => PickRandomEnum::fromEnum(VocalLevel::cases()),
            'fence_need' => PickRandomEnum::fromEnum(FenceNeed::cases()),
            'training_level' => PickRandomEnum::fromEnum(Training::cases()),
            'owner_experience' => PickRandomEnum::fromEnum(OwnerExperience::cases()),
            'shedding_level' => PickRandomEnum::fromEnum(SheddingLevel::cases()),
            'grooming_need' => PickRandomEnum::fromEnum(GroomingNeed::cases()),
            'special_needs' => random_int(0, 1),
            'special_need_description' => '',
            'good_with_kids' => PickRandomEnum::fromEnum(Reaction::cases()),
            'good_with_men' => PickRandomEnum::fromEnum(Reaction::cases()),
            'good_with_woman' => PickRandomEnum::fromEnum(Reaction::cases()),
            'good_with_physical_disabilities' => PickRandomEnum::fromEnum(Reaction::cases()),
            'good_with_mental_disabilities' => PickRandomEnum::fromEnum(Reaction::cases()),
            'good_with_medical_disorders' => PickRandomEnum::fromEnum(Reaction::cases()),
            'new_people_reaction' => PickRandomEnum::fromEnum(Reaction::cases()),
        ];
    }
}
