<div class="d-flex justify-content-center align-items-center" 
     style="min-height: 100vh; background: #f1f3f5;">

    <div class="card shadow-lg p-4" style="width: 380px; border-radius: 12px;">

        <h3 class="text-center mb-3" style="font-weight: 600;">
            Login Admin
        </h3>

        {{-- ALERT --}}
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        {{-- FORM --}}
        <form action="{{ route('admin.login.post') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Masukkan username..." required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukkan password..." required>
            </div>

            <button type="submit" class="btn btn-primary w-100 mt-2" style="border-radius: 8px;">
                Login
            </button>
        </form>

        <div class="text-center mt-3" style="font-size: 13px; color: #6c757d;">
            Portal Skripsi Admin © 2025
        </div>
    </div>

</div>