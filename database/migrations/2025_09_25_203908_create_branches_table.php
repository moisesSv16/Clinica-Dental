<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Rbranches (sucursales clínicas).
     */
    public function up(): void
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150); // Nombre de la sucursal
            $table->string('address')->nullable(); // Dirección completa
            $table->string('phone', 20)->nullable(); // Teléfono de contacto
            $table->string('email', 100)->nullable(); // Email de la sucursal
            $table->enum('status', ['activo', 'inactivo'])->default('activo'); // Control de estado
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branches');
    }
};
