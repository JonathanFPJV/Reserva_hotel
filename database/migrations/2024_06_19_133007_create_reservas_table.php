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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id('id_reservas');
            $table->foreignId('id_usuario')->constrained('users', 'id');
            $table->foreignId('id_habitacion')->constrained('habitaciones', 'ID_habitacion');
            $table->date('Fecha_inicio_reserva');
            $table->date('Fecha_final_reserva');
            $table->string('Estado_reserva', 45);
            $table->integer('dias_reserva');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
