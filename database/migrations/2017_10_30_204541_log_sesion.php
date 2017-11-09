<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LogSesion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('log_sesion', function (Blueprint $table) {
          $table->engine = 'InnoDB';
          $table->increments('id');
          $table->bigInteger('usuario_id');
          $table->ipAddress('direccion_ip');
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
        Schema::dropIfExists('log_sesion');
    }
}
