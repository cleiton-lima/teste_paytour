<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($envioEmail)
    {
        $this->envioEmail = $envioEmail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('SYSTEM_MAIL', 'acrl.ribeiro17@gmail.com'))
                    ->subject('Envio de Curriculo do Candidato a Vaga')
                    ->view('email.email')
                    ->attach(storage_path('app/public/arquivos/curriculos'.$this->envioEmail->arquivo))
                    ->with('envioEmail', $this->envioEmail);
    }
}
