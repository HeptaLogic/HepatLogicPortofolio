<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\KonsultasiMail;
use App\Mail\KonsultasiKonfirmasiMail;

class ContactController extends Controller
{
    public function kirim(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:120'],
            'requirements' => ['required', 'string', 'max:5000'],
        ]);

        try {
            $admin = config('mail.admin') ?: 'LogicHepta@gmail.com';
            Mail::to($admin)->send(new KonsultasiMail($data));
            Mail::to($data['email'])->send(new KonsultasiKonfirmasiMail($data));
        } catch (\Throwable $e) {
            if ((bool) env('MAIL_FALLBACK_LOG', false) === true) {
                Log::warning('SMTP gagal, fallback ke log mailer', ['error' => $e->getMessage()]);
                try {
                    $admin = config('mail.admin') ?: 'LogicHepta@gmail.com';
                    Mail::mailer('log')->to($admin)->send(new KonsultasiMail($data));
                    Mail::mailer('log')->to($data['email'])->send(new KonsultasiKonfirmasiMail($data));
                } catch (\Throwable $e2) {
                    Log::error('Gagal kirim email konsultasi', ['error' => $e2->getMessage()]);
                    return back()->with('status_error', 'Maaf, terjadi kendala saat mengirim email. Coba lagi sebentar.');
                }
            } else {
                Log::error('Gagal kirim email konsultasi', ['error' => $e->getMessage()]);
                return back()->with('status_error', 'Maaf, terjadi kendala saat mengirim email. Coba lagi sebentar.');
            }
        }

        return back()->with([
            'status' => 'Terima kasih! Permintaan konsultasi Anda sudah terkirim.',
            'popup_data' => [
                'nama' => $data['name'],
                'kategori' => 'konsultasi',
                'timestamp' => now('UTC')->toIso8601String(),
            ],
        ]);
    }
}


