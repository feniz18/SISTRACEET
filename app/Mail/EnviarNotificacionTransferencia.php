<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Usuario;
use App\Transferencia;

class EnviarNotificacionTransferencia extends Mailable
{
    use Queueable, SerializesModels;

    public $usuario;
    public $transferencia;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Usuario $usuario,Transferencia $transferencia)
    {
        $this->usuario = $usuario;
        $this->transferencia = $transferencia;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Nueva transferencia')->view('correo.notificacionTransferencia');
    }
}
