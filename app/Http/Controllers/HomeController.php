<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contactos;
use App\Aviso;
use Session;
use Mail;
class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function aviso(Request $re){
        try {
                    $contacto =
                    //  Contactos::create(
                        ['name'=>$re->name,'email'=>$re->email,'asunto'=>$re->asunto,'mensaje'=>$re->mensaje]
                    // )
                    ;

                    $mail =Mail::to(env('email_contact'));
                    // dd($contacto);
                    $mail->send(new Aviso( (object)$contacto));
                   Session::put('msj','Se ha enviado correctamente su mensaje');
                } catch (\Throwable $th) {
                   Session::put('err','Ha ocurrido un error vuelta a intentarlo mas tarde');
                }

        return redirect()->action('HomeController@index');
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
