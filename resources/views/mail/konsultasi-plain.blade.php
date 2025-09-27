Konsultasi Baru Masuk

Nama: {{ $data['name'] }}
Email: {{ $data['email'] }}

Kebutuhan:
{{ $data['requirements'] }}

Waktu Pengiriman: {{ now()->setTimezone(config('app.admin_timezone', config('app.timezone')))->format('d M Y H:i') }} ({{ config('app.admin_timezone', config('app.timezone')) }})


