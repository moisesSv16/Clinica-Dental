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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();

            // Relación con users
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // Relación con specialties
            $table->foreignId('specialty_id')->constrained('specialties')->onDelete('restrict');

            // Identificación y nombres
            $table->string('employee_number', 50)->unique();
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('mother_last_name', 100)->nullable();

            // Contacto
            $table->string('phone', 20)->nullable();
            $table->text('address')->nullable();

            // Datos personales
            $table->enum('gender', ['masculino', 'femenino', 'otro'])->nullable();
            $table->date('date_of_birth')->nullable();

            // Datos profesionales
            $table->string('license_number', 50)->nullable();
            $table->integer('experience_years')->nullable();
            $table->string('education', 255)->nullable();
            $table->text('bio')->nullable();

            // Datos laborales
            $table->date('hire_date')->nullable();
            $table->enum('status', ['activo', 'inactivo', 'en_vacaciones'])->default('activo');
            $table->json('work_schedule')->nullable();

            // Imagen
            $table->string('profile_photo')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
