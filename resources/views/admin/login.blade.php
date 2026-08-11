<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Braids by Kholeka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@600;700&display=swap" rel="stylesheet">
    <style>
        :root { --pink: #d45687; --pink-dark: #b03c6e; }
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #1a1a1a 0%, #2b2b2b 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            width: 100%;
            max-width: 420px;
            border-radius: 20px;
            padding: 2.5rem;
        }
        .brand-title { font-family: 'Poppins', sans-serif; font-weight: 700; }
        .brand-title span { color: var(--pink); }
        .btn-pink { background-color: var(--pink) !important; border-color: var(--pink) !important; color: white !important; }
        .btn-pink:hover { background-color: var(--pink-dark) !important; border-color: var(--pink-dark) !important; }
        .form-control:focus { border-color: var(--pink); box-shadow: 0 0 0 0.25rem rgba(212, 86, 135, 0.2); }
    </style>
</head>
<body>
    <div class="login-card bg-white shadow-lg">
        <div class="text-center mb-4">
            <h1 class="h4 brand-title mb-1">Braids by <span>Kholeka</span></h1>
            <p class="text-muted small mb-0">Admin Sign In</p>
        </div>

        @if($errors->any())
        <div class="alert alert-danger small">
            @foreach($errors->all() as $error)
                {{ $error }}
            @endforeach
        </div>
        @endif

        <form method="POST" action="{{ route('admin.login.submit') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label small fw-semibold">Email Address</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}" required autofocus>
            </div>
            <div class="mb-3">
                <label class="form-label small fw-semibold">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="form-check mb-4">
                <input type="checkbox" name="remember" class="form-check-input" id="remember">
                <label class="form-check-label small" for="remember">Remember me</label>
            </div>
            <button type="submit" class="btn btn-pink w-100 py-2 fw-semibold">
                <i class="bi bi-box-arrow-in-right me-1"></i> Sign In
            </button>
        </form>
    </div>
</body>
</html>
