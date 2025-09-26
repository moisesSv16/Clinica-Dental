<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('activity_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('set null');
            
            $table->string('action', 50); // login, logout, crear, editar, eliminar
            $table->string('table_name')->nullable(); // tabla afectada
            $table->unsignedBigInteger('record_id')->nullable(); // id del registro afectado
            $table->text('description')->nullable(); // detalle adicional

            $table->string('ip_address', 45)->nullable(); // IPv4 o IPv6
            $table->text('user_agent')->nullable(); // info del navegador/dispositivo

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('activity_logs');
    }
};
