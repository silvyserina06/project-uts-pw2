<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Laporan Pengajuan Judul Skripsi</title>
    <style>
        body { font-family: sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { border: 1px solid #000; padding: 6px; }
        th { background: #eee; }
    </style>
</head>
<body>

<h3 style="text-align:center;">LAPORAN PENGAJUAN JUDUL SKRIPSI</h3>

<p style="text-align:center; margin-top:-10px;">
    @if($start && $end)
        <strong>Periode:</strong> {{ $start }} s/d {{ $end }}
    @else
        <strong>Periode:</strong> Semua Data
    @endif
</p>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Mahasiswa</th>
            <th>Judul</th>
            <th>Status</th>
            <th>Tanggal Pengajuan</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($data as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->mahasiswa->nama ?? '-' }}</td>
            <td>{{ $item->judul }}</td>
            <td>{{ $item->status }}</td>
            <td>{{ $item->created_at->format('d-m-Y') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>