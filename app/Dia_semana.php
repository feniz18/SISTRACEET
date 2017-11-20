<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dia_semana extends Model
{

  protected $table = "dia_semana";
  protected $fillable = ['id','descripcion'];

  public function usuario(){

    return $this->belongsToMany('App\Usuario', 'usuario_semana',
    'cedula_id','dia_semana_id');

  }
  public function transferencia()
  {
      return $this->belongsToMany('App\Dia_semana', 'transferencia_semana',
      'transferencia_id','dia_semana_id');

  }

}
