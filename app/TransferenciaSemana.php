<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransferenciaSemana extends Model
{
    protected $table = 'transferencia_semana';
    protected $fillable = [
      'id',
      'dia_semana_id',
      'transferencia_id',
      'hora_inicio',
      'hora_fin'
    ];

    public function transferencias()
    {
      return $this->belongsTo('App\Transferencia','transferencia_id','id');
    }

}
