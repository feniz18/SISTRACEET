<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $primaryKey = "id_ciudad";
    protected $table = "ciudad";
    protected $fillable = ['id_ciudad','departamento_id','nombre'];

    public function combo($id)
    {

        return Ciudad::where('departamento_id',$id)->get();

    }

    public function departamento(){

        return $this->belongsTo('App\Departamento');

    }

}
