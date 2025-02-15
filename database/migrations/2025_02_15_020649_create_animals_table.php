<?php

declare(strict_types=1);

use App\Models\Species;
use App\Models\Status;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('animals', function (Blueprint $table): void {
            $table->id();
            $table->string('name');
            $table->string('profile_path');
            $table->string('gender');
            $table->foreignIdFor(Status::class);
            $table->foreignIdFor(Species::class);
            $table->boolean('mixed');
            $table->date('date_of_birth');
            $table->string('age_group');
            $table->integer('weight');
            $table->string('size_group');
            $table->string('eye_color');
            $table->text('coat_description');
            $table->string('coat_length');
            $table->text('markings');
            $table->string('ear_type');
            $table->string('tail_type');
            $table->string('energy_level');
            $table->string('exercise_need');
            $table->string('activity_level');
            $table->string('vocal_level');
            $table->string('fence_need');
            $table->string('training_level');
            $table->string('owner_experience');
            $table->string('shedding_level');
            $table->string('grooming_need');
            $table->string('special_needs');
            $table->text('special_need_description');
            $table->string('good_with_kids');
            $table->string('good_with_men');
            $table->string('good_with_woman');
            $table->string('good_with_physical_disabilities');
            $table->string('good_with_mental_disabilities');
            $table->string('good_with_medical_disorders');
            $table->string('new_people_reaction');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
