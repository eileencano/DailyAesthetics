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
        Schema::create('agenda', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->string('correo_electronico')->nullable();
            $table->string('numero_de_telefono')->nullable();
            $table->foreignId('clientes_id')->nullable()->constrained('clientes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('servicios_id')->nullable()->constrained('servicios')->onDelete('cascade')->onUpdate('cascade');
            $table->dateTime('fecha');
            $table->string('hora');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agenda');
    }
};
