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
        Schema::create('pagos', function (Blueprint $table) {
            $table->id('id_pago');
            $table->foreignId('id_reserva')->constrained('reservas', 'id_reservas');
            $table->decimal('Monto_pago', 10, 2);
            $table->string('Metodo_pago', 45);
            $table->string('Estado_pago', 45);
            $table->foreignId('id_plazos')->constrained('plazo_pagos', 'idPlazo_pago');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
