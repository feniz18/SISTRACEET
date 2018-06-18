<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuarioTransferencia extends Model
{
    public $timestamps = false;
    protected $table = 'usuario_transferencia';
    protected $fillable =
    [
      'id',
      'aprobacion',
      'usuario_id',
      'transferencia_id',
    ];
    public function transferencia()
    {
      return $this->belongsTo("App\Transferencia", 'transferencia_id', 'id');
    }

    public function usuarios()
    {
      return $this->belongsTo('App\Usuario', 'usuario_id', 'cedula');
    }
}
