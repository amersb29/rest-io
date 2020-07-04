<?php

namespace App\Http\Controllers\Api;

use Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReservationController extends Controller {
  
  public function sendReservationEmail(Request $request)
  {
    $info = [
      'name' => $request->post('name'),
      'email' => $request->post('email'),
      'phone' => $request->post('phone'),
      'course' => $request->post('course'),
    ];

    Mail::send('emails.reservation', $info, function ($message) use ($request) {
        $message->from($request->post('email'), $request->post('name'));
        $message->to('contacto@iobjtiva.com', 'Contacto IO');
        $message->subject('Requiero informes sobre el evento "' . $request->post('course') . '"');
        $message->priority(3);
    });

    return response(json_encode(['status'=>'OK']), 200)->header('Content-Type', 'application/json');
  }
}