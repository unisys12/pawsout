<?php

declare(strict_types=1);

use App\Models\Animal;
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
        Schema::create('fosters', function (Blueprint $table): void {
            $table->id();
            $table->foreignIdFor(User::class)->constrained();
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('phone');
            $table->timestamps();
        });

        // Alter Animal table to add foster_id
        Schema::table('animals', function (Blueprint $table): void {
            $table->foreignId('foster_id')->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('animals', function (Blueprint $table): void {
            $table->dropConstrainedForeignId('foster_id');
        });
        Schema::dropIfExists('fosters');
    }
};
