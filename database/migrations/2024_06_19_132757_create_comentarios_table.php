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
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id('idComentarios');
            $table->foreignId('id_usuario')->constrained('users', 'id');
            $table->foreignId('id_habitacion')->constrained('habitaciones', 'ID_habitacion');
            $table->integer('calificacion');
            $table->longText('Comentario');
            $table->date('fecha_subida');
            $table->date('fecha_actualizacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comentarios');
    }
};
