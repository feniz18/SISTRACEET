<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PivoteUsuarioTransferencia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_transferencia', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->bigInteger('usuario_id')->unsigned();
            $table->foreign('usuario_id')
                  ->references('cedula')->on('usuario');
            $table->integer('transferencia_id')->unsigned();
            $table->foreign('transferencia_id')
                  ->references('id')->on('transferencia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_transferencia');
    }
}
