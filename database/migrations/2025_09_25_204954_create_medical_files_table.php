<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('medical_files', function (Blueprint $table) {
            $table->id();
            
            // Relaciones
            $table->foreignId('patient_id')->constrained('patients')->onDelete('cascade');
            $table->foreignId('medical_record_id')->nullable()->constrained('medical_records')->onDelete('cascade');
            $table->foreignId('uploaded_by')->nullable()->constrained('users')->onDelete('set null');

            // Datos del archivo
            $table->string('file_path'); // ruta en storage
            $table->string('file_type', 50)->default('otro'); // imagen, pdf, radiografía, etc.
            $table->string('description')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('medical_files');
    }
};
