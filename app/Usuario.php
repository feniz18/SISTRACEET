<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\ReinicioPassword;

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
        'cedula',
        'nombres',
        'apellidos',
        'telefono',
        'email',
        'ciudad_id',
        'rol_id',
        'estado',
        'especialidad_id',
        'created_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ReinicioPassword($token));
    }

    public function logs(){

       return $this->hasMany('App\Log_usuario','usuario_id','cedula');

    }

    public function horario(){

      return $this->belongsToMany('App\Dia_semana', 'usuario_semana',
      'cedula_id','dia_semana_id')
       ->withPivot('hora_inicio','hora_fin','id');

    }
    public function especialidad()
    {
      return $this->belongsTo('App\Especialidad','especialidad_id','id');
    }

    public function pivoteUsuario()
    {
      return $this->hasMany('App\UsuarioSemana','cedula_id', 'cedula');
    }

    public function usuarios_transferencias()
    {
        return $this->belongsToMany(
          'App\Transferencia',
          'usuario_transferencia',
          'usuario_id',
          'transferencia_id'
        );
    }

    public function pivoteTransferencia()
    {
      return $this->hasMany('App\UsuarioTransferencia','usuario_id', 'cedula');
    }

}
