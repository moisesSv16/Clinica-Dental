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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();

            // Relación opcional con users (modelo mixto)
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');

            // Datos personales
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('mother_last_name', 100)->nullable();
            $table->date('date_of_birth')->nullable();
            $table->enum('gender', ['masculino', 'femenino', 'otro'])->nullable();

            // Contacto
            $table->string('phone', 20)->nullable();
            $table->string('address')->nullable();
            $table->string('email_alt')->nullable();

            // Datos médicos
            $table->string('blood_type', 5)->nullable(); // ej. O+, A-
            $table->text('allergies')->nullable();
            $table->text('medical_history')->nullable();
            $table->string('emergency_contact_name', 150)->nullable();
            $table->string('emergency_contact_phone', 20)->nullable();

            // Control
            $table->enum('status', ['activo', 'inactivo'])->default('activo');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
