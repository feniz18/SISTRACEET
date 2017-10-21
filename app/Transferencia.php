<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transferencia extends Model
{
    protected $table = 'transferencia';
    protected $fillable = ['id','nombre','fecha_inicio','fecha_fin','hora_inicio','hora_fin','sede_id','descripcion','cupos'];


}
