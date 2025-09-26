<div style="font-family:Arial,Helvetica,sans-serif;line-height:1.6;color:#0b1530">
    <h2 style="margin:0 0 12px 0;">{{ $title ?? 'Notifikasi' }}</h2>
    <div style="padding:12px;border:1px solid #e5e7eb;border-radius:8px;background:#f9fafb">
        @foreach ($lines ?? [] as $line)
            <p style="margin:0 0 8px 0;">{!! $line !!}</p>
        @endforeach
    </div>
</div>
