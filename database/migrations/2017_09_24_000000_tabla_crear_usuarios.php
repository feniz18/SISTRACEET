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
            $table->bigInteger('cedula')->primary()->unsigned();
            $table->date("fecha_nacimiento");
            $table->string('nombres');
            $table->string('apellidos');
            $table->bigInteger('telefono')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('especialidad_id')->unsigned()->nullable();
            $table->foreign('especialidad_id')
                  ->references('id')->on('especialidad');

            $table->integer('ciudad_id')->unsigned();
            $table->foreign('ciudad_id')
                  ->references('id_ciudad')->on('ciudad');

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
