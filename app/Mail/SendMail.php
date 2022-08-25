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
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('SYSTEM_MAIL', 'contato@paytour.com'))
                    ->subject('Obrigado por se candidatar a vaga')
                    ->markdown('emails.agradecimento_vaga');
    }
}
