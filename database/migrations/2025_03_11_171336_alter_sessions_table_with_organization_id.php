<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * NOTE: Since I am using SQLite locally, calling after does not work.
     * I am leaving it due to fact that in production, I may end up going
     * with either MySql or PG. Who knows at the moment.
     */
    public function up(): void
    {
        Schema::table('sessions', function (Blueprint $table) {
            $table->after('user_id', function (Blueprint $table) {
                $table->foreignId('organization_id')->nullable()->index();
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sessions', function (Blueprint $table) {
            $table->dropColumn('organization_id');
        });
    }
};
