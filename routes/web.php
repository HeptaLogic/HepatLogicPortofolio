<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

Route::get('/', function () {
    return view('portfolio');
});

Route::post('/contact', function (Request $request) {
    $data = $request->validate([
        'name' => ['required', 'string', 'max:120'],
        'email' => ['required', 'email', 'max:120'],
        'requirements' => ['required', 'string', 'max:5000'],
    ]);

    $to = 'LogicHepta@gmail.com';
    try {
        $html = view('mail.simple', [
            'title' => 'Konsultasi Baru dari Website',
            'lines' => [
                'Nama: ' . $data['name'],
                'Email: ' . $data['email'],
                'Kebutuhan:',
                nl2br(e($data['requirements']))
            ],
        ])->render();

        Mail::send([], [], function ($message) use ($to, $data, $html) {
            $message->to($to)
                ->from(config('mail.from.address', 'LogicHepta@gmail.com'), config('mail.from.name', 'HeptaLogic'))
                ->replyTo($data['email'], $data['name'])
                ->subject('Konsultasi Baru dari Website')
                ->html($html);
        });
    } catch (\Throwable $e) {
        Log::error('Gagal kirim email konsultasi', ['error' => $e->getMessage()]);
        return back()->with('status_error', 'Maaf, terjadi kendala saat mengirim email. Coba lagi sebentar.');
    }

    return back()->with('status', 'Terima kasih! Permintaan konsultasi Anda sudah terkirim.');
});
