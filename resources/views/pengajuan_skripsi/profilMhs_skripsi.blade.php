<h2>Profil Mahasiswa</h2>

<p>Nama: {{ auth()->user()->name ?? 'Nama Mahasiswa' }}</p>
<p>NIM: {{ auth()->user()->nim ?? '12345678' }}</p>
<p>Email: {{ auth()->user()->email ?? 'email@kampus.ac.id' }}</p>


