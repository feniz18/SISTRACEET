<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuarioSemana extends Model
{
    public $timestamps = false;
    protected $table = 'usuario_semana';
    protected $fillable = ['id','dia_semana_id','cedula_id','hora_inicio','hora_fin'];

    public function Usuarios()
    {
      $this->belongsTo('App\Usuario','cedula_id', 'cedula');
    }
}
