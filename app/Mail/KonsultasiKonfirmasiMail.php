<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class KonsultasiKonfirmasiMail extends Mailable
{
    use Queueable, SerializesModels;

    public array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('Konfirmasi Konsultasi - HeptaLogic')
            ->view('mail.konsultasi-konfirmasi')
            ->text('mail.konsultasi-konfirmasi-plain');
    }
}


