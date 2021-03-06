<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    protected $table = 'sede';
    protected $fillable = ['id','nombre','direccion'];

    public function ComboSedes ($id)
    {
      $sede = Sede::find($id);
      return $sede;

    }

    public function transferencias()
    {
      return $this->hasMany('App\Sede','sede_id','id');
    }

}
