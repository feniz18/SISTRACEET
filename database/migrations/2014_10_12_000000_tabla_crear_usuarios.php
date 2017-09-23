<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaCrearUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->integer('cedula')->primary();
            $table->string('nombres');
            $table->string('apellidos');
            $table->bigInteger('telefono')->nullable();
            $table->string('correo');
            $table->string('contrasena',190);
            $table->integer('ciudad_id')->index();
            $table->integer('rol_id')->index();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
