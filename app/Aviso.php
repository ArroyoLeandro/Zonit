<?php

namespace App;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Http\Controllers\GrupoController;
use App\Datosgen;

class Aviso extends Mailable  // implements ShouldQueue
{
    use Queueable, SerializesModels;
    public $contacto;

    public function __construct( $contacto)
    {
     $this->contacto= $contacto;
    }

    public function build()
    {
        // dd($this->contacto);
       $sendingg= $this->view('contacto')
        ->from(env('email'))
        ->subject($this->contacto->name .' se ha contactado con usted a traves de la pagina.');
        return $sendingg;
    }



}
