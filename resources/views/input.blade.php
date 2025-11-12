<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #e3f2fd, #bbdefb);
            min-height: 100vh;
            font-family: "Times New Roman", sans-serif;
            display: flex;
            flex-direction: column;
        }

        .center-wrapper {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px 0; 
        }

        .card {
            background-color: #fff;
            border: none;
            border-radius: 18px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.15);
            animation: fadeIn 0.8s ease-in-out;
            max-width: 600px;
            width: 90%;
            padding: 35px 40px;
        }

        h3 {
            font-size: 1.6rem;
            font-weight: bold;
        }

        .btn-primary {
            background-color: #1976d2;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0d47a1;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }

        footer {
            text-align: center;
            margin: 15px 0;
            color: #555;
            font-size: 0.9rem;
        }
    </style>
</head>

<body>

    <div class="center-wrapper">
        <div class="card">
            <h3 class="text-center mb-4 text-primary">Tambah Data Mahasiswa</h3>

            {{-- Alert pesan sukses --}}
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            {{-- Form input --}}
            <form action="{{ route('mahasiswa2.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" name="nim" id="nim" class="form-control" placeholder="Masukkan NIM" required>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama lengkap" required>
                </div>
                <div class="mb-3">
                    <label for="prodi" class="form-label">Program Studi</label>
                    <input type="text" name="prodi" id="prodi" class="form-control" placeholder="Contoh: Sistem Informasi" required>
                </div>
                <div class="mb-3">
                    <label for="semester" class="form-label">Semester</label>
                    <input type="number" name="semester" id="semester" class="form-control" placeholder="Semester aktif" min="1" max="14" required>
                </div>
                <div class="mb-3">
                    <label for="kelas" class="form-label">Kelas</label>
                    <input type="text" name="kelas" id="kelas" class="form-control" placeholder="Masukkan kelas (A, B, C)" required>
                </div>
                <div class="mb-4">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control" rows="3" placeholder="Alamat lengkap" required></textarea>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('mahasiswa2.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <footer>
        <small>© 2025 Silvy Serina | Sistem Informasi UIN STS Jambi</small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>