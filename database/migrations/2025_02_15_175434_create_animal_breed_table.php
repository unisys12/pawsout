<?php

declare(strict_types=1);

use App\Models\Animal;
use App\Models\Breed;
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
        Schema::create('animal_breed', function (Blueprint $table): void {
            $table->id();
            $table->foreignIdFor(Animal::class, 'animal_id');
            $table->foreignIdFor(Breed::class, 'breed_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animal_breed');
    }
};
