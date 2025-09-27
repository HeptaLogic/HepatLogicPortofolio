<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Konsultasi</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px; background-color: #f4f4f4; }
        .container { background-color: #ffffff; padding: 30px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .header { text-align: center; border-bottom: 3px solid #3b82f6; padding-bottom: 20px; margin-bottom: 30px; }
        .logo { font-size: 20px; font-weight: bold; color: #3b82f6; margin-bottom: 10px; }
        .success-icon { font-size: 40px; color: #10b981; margin-bottom: 16px; }
        .info-box { background-color: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; margin: 20px 0; }
        .info-item { margin-bottom: 12px; }
        .info-label { font-weight: bold; color: #374151; margin-bottom: 6px; }
        .info-value { color: #6b7280; }
        .cta-button { display: inline-block; background-color: #3b82f6; color: #ffffff; padding: 12px 24px; text-decoration: none; border-radius: 8px; font-weight: bold; margin: 20px 0; text-align: center; }
        .footer { text-align: center; margin-top: 30px; padding-top: 20px; border-top: 1px solid #e5e7eb; color: #6b7280; font-size: 14px; }
        .contact-info { background-color: #eff6ff; border: 1px solid #93c5fd; border-radius: 8px; padding: 20px; margin: 20px 0; }
    </style>
    </head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">HeptaLogic</div>
            <div class="success-icon">✅</div>
            <h1 style="color: #10b981; margin: 0;">Konsultasi Berhasil Dikirim!</h1>
        </div>

        <p>Halo <strong>{{ $data['name'] }}</strong>,</p>
        <p>Terima kasih telah mengirimkan konsultasi Anda. Kami telah menerima permintaan Anda dan akan segera menghubungi untuk membahas lebih lanjut.</p>

        <div class="info-box">
            <h3 style="color: #374151; margin-top: 0;">Ringkasan:</h3>
            <div class="info-item">
                <div class="info-label">Nama:</div>
                <div class="info-value">{{ $data['name'] }}</div>
            </div>
            <div class="info-item">
                <div class="info-label">Email:</div>
                <div class="info-value">{{ $data['email'] }}</div>
            </div>
            <div class="info-item">
                <div class="info-label">Kebutuhan:</div>
                <div class="info-value">{!! nl2br(e($data['requirements'])) !!}</div>
            </div>
            <div class="info-item">
                <div class="info-label">Waktu Pengiriman:</div>
                <div class="info-value">{{ now()->setTimezone(config('app.admin_timezone', config('app.timezone')))->format('d M Y H:i') }} ({{ config('app.admin_timezone', config('app.timezone')) }})</div>
            </div>
        </div>

        <div class="contact-info">
            <h3 style="color: #1d4ed8; margin-top: 0;">Langkah Selanjutnya</h3>
            <ul style="color: #1e3a8a; padding-left: 18px;">
                <li>Tim kami akan menghubungi Anda dalam 24 jam</li>
                <li>Kami akan memvalidasi kebutuhan dan menyusun rencana</li>
            </ul>
        </div>

        <div style="text-align: center;">
            <a href="https://wa.me/6282236234227?text=Halo%2C%20saya%20{{ urlencode($data['name']) }}%20sudah%20mengirim%20konsultasi" class="cta-button" target="_blank">Chat WhatsApp</a>
        </div>

        <div class="footer">
            <p>Email ini dikirim otomatis. Mohon tidak membalas email ini.</p>
            <p>&copy; {{ date('Y') }} HeptaLogic</p>
        </div>
    </div>
</body>
</html>


