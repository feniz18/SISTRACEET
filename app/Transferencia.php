<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transferencia extends Model
{
    protected $table = 'transferencia';
    protected $fillable = ['id','nombre','fecha_inicio','fecha_fin','hora_inicio','hora_fin','sede_id','descripcion','cupos'];

    public function dias_semana()
    {
        return $this->belongsToMany('App\Dia_semana', 'transferencia_semana',
        'transferencia_id','dia_semana_id');
    }

    public function sede()
    {
      return $this->belongsTo('App\Sede','sede_id','id');
    }
}
