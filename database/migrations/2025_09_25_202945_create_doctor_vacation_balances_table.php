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
        Schema::create('doctor_vacation_balances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctor_id')->constrained('doctors')->onDelete('cascade');
            $table->year('year'); // Año del saldo de vacaciones
            $table->integer('days_total')->default(0); // Total asignado
            $table->integer('days_taken')->default(0); // Días consumidos
            $table->integer('days_available')->default(0); // Días restantes
            $table->timestamps();

            $table->unique(['doctor_id', 'year']); // Cada doctor tiene un saldo por año
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor_vacation_balances');
    }
};
