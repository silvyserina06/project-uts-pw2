<h2>Riwayat Pengajuan Judul Skripsi</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Deskripsi</th>
        <th>Status</th>
        <th>Tanggal</th>
    </tr>

    @foreach ($riwayat as $item)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->judul }}</td>
        <td>{{ $item->deskripsi }}</td>
        <td>{{ $item->status }}</td>
        <td>{{ $item->created_at->format('d-m-Y') }}</td>
    </tr>
    @endforeach
</table>
