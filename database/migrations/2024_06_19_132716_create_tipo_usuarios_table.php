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
        Schema::create('tipo_usuarios', function (Blueprint $table) {
            $table->id('id_tipo');
            $table->string('nombre_tipo', 45);
            $table->foreignId('Roles_id_rol')->constrained('roles', 'id_rol');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_usuarios');
    }
};
