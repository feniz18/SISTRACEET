<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Transferencia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('transferencia', function (Blueprint $table) {
          $table->engine = 'InnoDB';
          $table->increments('id');
          $table->string('nombre');
          $table->date('fecha_inicio');
          $table->date('fecha_fin');
          $table->integer('especialidad_id');
          $table->integer('sede_id')->unsigned();
          $table->foreign('sede_id')
                ->references('id')->on('sede');
          $table->integer('cupos');
          $table->text('descripcion')->nullable();
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
        Schema::dropIfExists('transferencia');
    }
}
