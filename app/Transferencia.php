<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transferencia extends Model
{
    protected $table = 'transferencia';
    protected $fillable = [
          'id',
          'nombre',
          'fecha_inicio',
          'fecha_fin',
          'hora_inicio',
          'hora_fin',
          'sede_id',
          'descripcion',
          'cupos',
          'especialidad_id'
        ];

    public function horario()
    {
        return $this->belongsToMany('App\Dia_semana', 'transferencia_semana',
        'transferencia_id','dia_semana_id')->withPivot('id','hora_inicio','hora_fin');
    }

    public function sede()
    {
      return $this->belongsTo('App\Sede','sede_id','id');
    }

    public function especialidades()
    {
      return $this->belongsTo('App\Especialidad','especialidad_id','id');
    }
    public function pivoteTransferencia()
    {
      return $this->hasMany('App\TransferenciaSemana','transferencia_id','id');
    }
}
