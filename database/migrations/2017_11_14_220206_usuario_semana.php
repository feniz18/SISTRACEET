<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsuarioSemana extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_semana', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('dia_semana_id')->unsigned();
            $table->foreign('dia_semana_id')
                  ->references('id')->on('dia_semana');

            $table->bigInteger('cedula_id')->unsigned();
            $table->foreign('cedula_id')
                  ->references('cedula')->on('usuario');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_semana');
    }
}
