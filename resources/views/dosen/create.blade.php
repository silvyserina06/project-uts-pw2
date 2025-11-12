@extends('layouts.master')

@section('title', 'Halaman dosen')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
    Data Dosen
    <form action="{{ route('dosenSimpan') }}" method="post">
        @csrf
  <div class="mb-3">
    <label class="form-label">NIP</label>
    <input type="number" name="nip" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Nama Lengkap</label>
    <input type="text" name="namaLengkap" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Prodi</label>
    <select name="prodi" class="form-control">
      <option value="kimia">Kimia</option>
      <option value="fisika">Fisika</option>
      <option value="arsitektur">Arsitektur</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection