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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();

            // Relaciones
            $table->foreignId('patient_id')->constrained('patients')->onDelete('cascade');
            $table->foreignId('treatment_id')->constrained('treatments')->onDelete('cascade');

            // Información de facturación
            $table->decimal('amount', 10, 2);
            $table->enum('status', ['pendiente', 'pagado', 'cancelado'])->default('pendiente');
            $table->enum('payment_method', ['efectivo', 'tarjeta', 'transferencia', 'otro'])->nullable();
            $table->date('payment_date')->nullable();
            $table->text('notes')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
