@extends('layouts.app_mhsskripsi')

@section('content')

{{-- Flash message di sini --}}
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<form>
    @csrf
    <label class="form-label">NIM</label>
    <input type="nim" name="nim" class="form-control">

    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Login</button>
</form>

@endsection
