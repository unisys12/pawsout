<?php

declare(strict_types=1);

use App\Models\User;
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
        Schema::create('visitations', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('adopter_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('animal_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('scheduled_at');
            $table->string('status');
            $table->text('notes')->nullable();
            $table->foreignIdFor(User::class)->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitations');
    }
};
