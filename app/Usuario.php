<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use Notifiable;

    protected $table = "usuario";
    protected $primaryKey = "cedula";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'cedula', 'nombres', 'apellidos','telefono','correo','ciudad_id','rol_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    
}
