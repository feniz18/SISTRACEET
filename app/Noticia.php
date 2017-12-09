<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table = 'noticia';
    protected $fillable = ['id','titulo','contenido','imagen','activo','autor'];
}
