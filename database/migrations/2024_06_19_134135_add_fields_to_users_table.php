<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('apellidos', 45)->after('name');
            $table->string('telefono', 45)->after('email');
            $table->string('direccion', 45)->after('telefono');
            $table->string('fecha_registro', 45)->after('direccion');
            $table->string('estado_usuario', 45)->after('fecha_registro');
            $table->string('fecha_inicio', 45)->after('estado_usuario');
            $table->unsignedBigInteger('id_tipo')->after('fecha_inicio');

            $table->foreign('id_tipo')->references('id_tipo')->on('tipo_usuarios');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('apellidos');
            $table->dropColumn('telefono');
            $table->dropColumn('direccion');
            $table->dropColumn('fecha_registro');
            $table->dropColumn('estado_usuario');
            $table->dropColumn('fecha_inicio');
            $table->dropForeign(['id_tipo']);
            $table->dropColumn('id_tipo');
        });
    }
}

