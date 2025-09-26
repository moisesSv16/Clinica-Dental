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
        Schema::create('invoice_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invoice_id')->constrained('invoices')->onDelete('cascade');
            
            $table->decimal('amount', 10, 2); // monto pagado en este abono
            $table->enum('payment_method', ['efectivo', 'tarjeta', 'transferencia', 'otro'])->nullable();
            $table->date('payment_date')->default(now()); // fecha de pago
            $table->text('notes')->nullable(); // comentarios (ej. pagó con dos tarjetas)

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_payments');
    }
};
