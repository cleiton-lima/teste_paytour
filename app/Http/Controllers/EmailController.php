<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function enviarEmail()
    {
        $email = 'acrl.ribeiro17@gmail.com';

        $dadosEmail = [
            'title' => 'Envio de Curriculo do Candidato a Vaga',
        ];

        Mail::to($email)->send(new SendMail($dadosEmail));

        dd('Email enviado com sucesso!');
    }
}
