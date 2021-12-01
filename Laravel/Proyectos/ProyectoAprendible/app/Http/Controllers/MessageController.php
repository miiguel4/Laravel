<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived;

class MessageController extends Controller
{
     public function store(Request $resquest)
    {
        
        return $resquest->get('nombre');
    }

    public function store2()
    {
        
       /*  return request('email'); */

       $message = request()->validate([
            'nombre' => 'required',
            /* 'email' => ['required','email'] */
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'

       ], [
           'nombre.required' => __('You must enter your name!!!'), 
       ]);

       
       Mail::to('mruirub878@g.educaand.es')->queue(new MessageReceived($message)) ;
       /* return new MessageReceived($message); */
       /* return 'Mensaje Enviado'; */
      /*  return back(); */
      return back()->with('status', 'Recibimos tu mensaje, te responderemos en menos de  24 horas.');
    }

    
}
