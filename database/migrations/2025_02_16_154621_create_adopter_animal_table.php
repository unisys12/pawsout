<?php

declare(strict_types=1);

use App\Models\Adopter;
use App\Models\Animal;
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
        Schema::create('adopter_animal', function (Blueprint $table): void {
            $table->foreignIdFor(Adopter::class)->constrained();
            $table->foreignIdFor(Animal::class)->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adopter_animal');
    }
};
