Konsultasi Berhasil Dikirim

Halo {{ $data['name'] }},

Terima kasih telah mengirimkan konsultasi Anda. Kami akan menghubungi Anda dalam 24 jam.

Ringkasan:
- Nama: {{ $data['name'] }}
- Email: {{ $data['email'] }}
- Kebutuhan:
{{ $data['requirements'] }}

Waktu Pengiriman: {{ now()->setTimezone(config('app.admin_timezone', config('app.timezone')))->format('d M Y H:i') }} ({{ config('app.admin_timezone', config('app.timezone')) }})

Tim HeptaLogic

