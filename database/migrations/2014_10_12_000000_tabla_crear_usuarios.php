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
            $table->engine = 'InnoDB';
            $table->bigInteger('cedula')->primary();
            $table->date("fecha_nacimiento");
            $table->string('nombres');
            $table->string('apellidos');
            $table->bigInteger('telefono')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('ciudad_id')->index();
            $table->enum('rol_id',['administrador','sadministrador','docente']);
            $table->boolean('activo');
            $table->string('imagen')->nullable();
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
