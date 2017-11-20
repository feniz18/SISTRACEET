<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaPivoteTransferencia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transferencia_semana', function (Blueprint $table) {
            $table->engine ='InnoDB';
            $table->increments('id');
            $table->integer('dia_semana_id')->unsigned();
            $table->foreign('dia_semana_id')
                  ->references('id')->on('dia_semana');
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
        Schema::table('transferencia_semana', function (Blueprint $table) {
            //
        });
    }
}
