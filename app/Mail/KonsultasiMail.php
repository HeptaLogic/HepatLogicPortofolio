<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class KonsultasiMail extends Mailable
{
    use Queueable, SerializesModels;

    public array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('Konsultasi Baru dari Website')
            ->replyTo($this->data['email'] ?? null, $this->data['name'] ?? null)
            ->view('mail.konsultasi')
            ->text('mail.konsultasi-plain');
    }
}


