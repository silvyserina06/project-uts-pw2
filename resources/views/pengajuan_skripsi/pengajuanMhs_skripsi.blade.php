<h2>Form Pengajuan Judul Skripsi</h2>

<form action="{{ route('skripsi.pengajuan.store') }}" method="POST">
    @csrf

    <label>Judul Skripsi</label>
    <input type="text" name="judul" required>

    <br><br>

    <label>Deskripsi</label>
    <textarea name="deskripsi" required></textarea>

    <br><br>

    <button type="submit">Kirim Pengajuan</button>
</form>
