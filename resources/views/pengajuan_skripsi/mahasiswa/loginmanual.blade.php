<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Mahasiswa</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f0f4f7;
            height: 100vh;
        }
        .login-card {
            max-width: 380px;
            margin: auto;
            margin-top: 90px;
            padding: 25px;
            border-radius: 12px;
            background: white;
            box-shadow: 0px 0px 15px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

<div class="login-card">
    <h4 class="text-center mb-3">Login Mahasiswa</h4>

    @if(session('error'))
        <div class="alert alert-danger py-2">
            {{ session('error') }}
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success py-2">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('login.mhs.post') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">NIM</label>
            <input type="text" name="nim" class="form-control" placeholder="Masukkan NIM">
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Masukkan Password">
        </div>

        <button class="btn btn-primary w-100">Login</button>
    </form>
</div>

<!-- Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>