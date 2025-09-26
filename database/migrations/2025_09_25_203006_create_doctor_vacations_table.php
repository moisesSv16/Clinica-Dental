<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Control de vacaciones de doctores
     */
    public function up(): void
    {
        Schema::create('doctor_vacations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctor_id')->constrained('doctors')->onDelete('cascade');

            $table->date('start_date');
            $table->date('end_date');

            $table->integer('days_requested'); // Días solicitados
            $table->integer('days_taken')->nullable(); // Días realmente disfrutados
            $table->integer('days_returned')->default(0); // Días regresados si se suspenden

            $table->string('reason')->nullable();

            $table->enum('status', [
                'pendiente',
                'aprobado',
                'rechazado',
                'en curso',
                'suspendido',
                'finalizado'
            ])->default('pendiente');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor_vacations');
    }
};
