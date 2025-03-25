<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\contactMail;

class MailController extends Controller
{
    public function send(Request $request)
    {
        $envio = [
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'tel' => $request->input('tel'),
            'mensagem' => $request->input('mensagem')
        ];

        Mail::to($request->email)->send(new contactEmail($envio));
    }
}
