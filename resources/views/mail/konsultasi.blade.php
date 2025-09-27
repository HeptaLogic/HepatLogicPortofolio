<h2>Konsultasi Baru Masuk</h2>
<p><strong>Nama:</strong> {{ $data['name'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Kebutuhan:</strong></p>
<p>{!! nl2br(e($data['requirements'])) !!}</p>
<p><strong>Waktu Pengiriman:</strong> {{ now()->setTimezone(config('app.admin_timezone', config('app.timezone')))->format('d M Y H:i') }} ({{ config('app.admin_timezone', config('app.timezone')) }})</p>


