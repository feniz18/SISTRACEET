<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaCiudad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('ciudad', function (Blueprint $table) {
          $table->engine = 'InnoDB';
          $table->increments('id_ciudad');
          $table->integer('departamento_id')->index();
          $table->foreign('departamento_id')
                ->references('id_departamento')->on('departamento');
          $table->string('nombre');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ciudad');
    }
}
