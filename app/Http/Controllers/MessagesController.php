<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function store()
    {
      $mensaje = request()->validate([
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'content' => 'required|min:3'
      ], [
        'name.required' => __('I need your name')
      ]);


      Mail::to('amer.salgado@globant.com')->queue(new MessageReceived($mensaje));

      // return redirect()->route('contact')
        return back()->with('info', 'Tu mensaje ha sido enviado correctamente :)');
    }
}
