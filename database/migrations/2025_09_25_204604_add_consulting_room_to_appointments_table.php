<?php

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
        Schema::table('appointments', function (Blueprint $table) {
            // Relación con consultorios
            $table->foreignId('consulting_room_id')
                  ->nullable()
                  ->constrained('consulting_rooms')
                  ->onDelete('set null')
                  ->after('doctor_id'); // lo coloca después del doctor
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->dropForeign(['consulting_room_id']);
            $table->dropColumn('consulting_room_id');
        });
    }
};
