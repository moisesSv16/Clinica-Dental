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
        Schema::create('consulting_room_doctor', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctor_id')->constrained('doctors')->onDelete('cascade');
            $table->foreignId('consulting_room_id')->constrained('consulting_rooms')->onDelete('cascade');
            
            // Horarios opcionales (ej. lunes a viernes 9-14)
            $table->json('work_schedule')->nullable();

            $table->timestamps();

            // Evitar duplicados (el mismo doctor en el mismo consultorio más de una vez)
            $table->unique(['doctor_id', 'consulting_room_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consulting_room_doctor');
    }
};

