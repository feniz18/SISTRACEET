<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Departamento extends Model
{
  protected $primaryKey = "id_departamento";
  protected $table = "departamento";
  protected $fillable = ['id_departamento','nombre'];

    

    public function ciudad(){

        return $this->hasMany('App\Ciudad','departamento_id');

    }
}
