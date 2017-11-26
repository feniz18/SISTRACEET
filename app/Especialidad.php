<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    protected $table = 'especialidad';
    protected $fillable = ['id','nombre'];

    public function usuario()
    {
      return $this->hasMany('App\Usuario','especialidad_id','id');
    }
}
