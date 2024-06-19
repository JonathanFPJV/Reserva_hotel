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
        Schema::create('habitaciones', function (Blueprint $table) {
            $table->id('ID_habitacion');
            $table->integer('Numero_habitacion');
            $table->string('Tipo_habitacion', 45);
            $table->integer('Capacidad');
            $table->double('Precio', 8, 2);
            $table->string('Estado_habitacion', 45);
            $table->integer('Piso');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('habitaciones');
    }
};
