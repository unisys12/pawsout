<?php

declare(strict_types=1);

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
        Schema::create('breeds', function (Blueprint $table): void {
            $table->id();
            $table->string('name');
            $table->string('bred_for')->nullable();
            $table->string('breed_group')->nullable();
            $table->string('height')->nullable();
            $table->string('image_url')->nullable();
            $table->string('life_span')->nullable();
            $table->string('origin')->nullable();
            $table->string('temperament')->nullable();
            $table->string('weight')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('breeds');
    }
};
