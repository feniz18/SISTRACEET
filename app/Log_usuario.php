<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log_usuario extends Model
{
  protected $table = "log_sesion";

  protected $fillable = [

    'created_at','usuario_id'

  ];

  public function usuario(){

      return $this->belongsTo('App\Usuario','cedula','usuario_id');    
  }
}
