<!DOCTYPE html>
<html>
<head>
    <title>Hitung PDAM Tirta Mayang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow-lg p-4">
        <h3 class="mb-3 text-center">💧 Hitung Pembayaran PDAM</h3>
        <form action="{{ route('pdam.hitung') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="pemakaian" class="form-label">Masukkan Pemakaian Air (m³)</label>
                <input type="number" name="pemakaian" id="pemakaian" class="form-control" placeholder="Contoh: 50" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Hitung</button>
        </form>

        @isset($total)
        <div class="alert alert-success mt-4">
            <strong>Pemakaian:</strong> {{ $pemakaian }} m³ <br>
            <strong>Total Bayar:</strong> Rp{{ number_format($total, 0, ',', '.') }}
        </div>
        @endisset
    </div>
</div>
</body>
</html>
