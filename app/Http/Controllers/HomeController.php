<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    // public function contacto(Request $re){

    //     try {
    //         $contacto = Contactos::create(
    //             ['name'=>$re->name,'email'=>$re->email,'asunto'=>$re->asunto,'mensaje'=>$re->mensaje]
    //         );
    //         $mail =Mail::to(env('EMAIL_SEND'));
    //         // dd($contacto);
    //         $mail->send(new Aviso($contacto));
    //         return ['status'=>'success','msj'=>'Se ha enviado correctamente su mensaje'];
    //     } catch (Throwable $th) {
    //         return ['status'=>'warning','msj'=>'Ha ocurrido un error vuelta a intentarlo mas tarde','th'=>$th];

    //     }

    // }



}
