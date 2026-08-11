<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin') | Braids by Kholeka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --pink: #d45687;
            --pink-dark: #b03c6e;
            --pink-soft: #fce8f1;
            --dark: #1a1a1a;
        }
        body {
            font-family: 'Inter', sans-serif;
            background: #f7f5f6;
        }
        .admin-sidebar {
            width: 240px;
            min-height: 100vh;
            background: var(--dark);
            position: fixed;
            top: 0;
            left: 0;
        }
        .admin-sidebar .brand {
            font-family: 'Poppins', sans-serif;
            color: white;
            font-weight: 700;
            padding: 1.5rem 1.25rem;
            font-size: 1.1rem;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        .admin-sidebar .brand span { color: var(--pink); }
        .admin-nav-link {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.85rem 1.25rem;
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            font-size: 0.92rem;
            font-weight: 500;
            transition: all 0.2s ease;
        }
        .admin-nav-link:hover, .admin-nav-link.active {
            background: rgba(212, 86, 135, 0.15);
            color: white;
            border-left: 3px solid var(--pink);
        }
        .admin-main {
            margin-left: 240px;
            padding: 2rem;
        }
        @media (max-width: 900px) {
            .admin-sidebar { width: 100%; min-height: auto; position: static; }
            .admin-main { margin-left: 0; }
        }
        .btn-pink {
            background-color: var(--pink) !important;
            border-color: var(--pink) !important;
            color: white !important;
        }
        .btn-pink:hover { background-color: var(--pink-dark) !important; border-color: var(--pink-dark) !important; }
        .btn-outline-pink { border: 1.5px solid var(--pink) !important; color: var(--pink) !important; }
        .btn-outline-pink:hover { background-color: var(--pink) !important; color: white !important; }
        .text-pink { color: var(--pink) !important; }
        .bg-pink-soft { background-color: var(--pink-soft) !important; }
        .card { border: 1px solid rgba(0,0,0,0.06); border-radius: 12px; }
        .stat-card { border-radius: 14px; }
        table.admin-table thead th { font-size: 0.8rem; text-transform: uppercase; color: #888; border-bottom-width: 1px; }
        .badge-status-new { background: #fce8f1; color: var(--pink-dark); }
        .badge-status-contacted { background: #fff3cd; color: #8a6d00; }
        .badge-status-booked { background: #d4edda; color: #1e7e34; }
        .badge-status-cancelled { background: #f1f1f1; color: #888; }
    </style>
    @stack('styles')
</head>
<body>
    <div class="admin-sidebar">
        <div class="brand">Braids by <span>Kholeka</span> <div class="fw-normal small opacity-75">Admin</div></div>
        <nav class="py-3">
            <a href="{{ route('admin.dashboard') }}" class="admin-nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>
            <a href="{{ route('admin.services.index') }}" class="admin-nav-link {{ request()->routeIs('admin.services.*') ? 'active' : '' }}">
                <i class="bi bi-scissors"></i> Services
            </a>
            <a href="{{ route('admin.portfolio.index') }}" class="admin-nav-link {{ request()->routeIs('admin.portfolio.*') ? 'active' : '' }}">
                <i class="bi bi-images"></i> Portfolio
            </a>
            <a href="{{ route('admin.inquiries.index') }}" class="admin-nav-link {{ request()->routeIs('admin.inquiries.*') ? 'active' : '' }}">
                <i class="bi bi-envelope"></i> Inquiries
            </a>
            <a href="{{ route('admin.account.edit') }}" class="admin-nav-link {{ request()->routeIs('admin.account.*') ? 'active' : '' }}">
                <i class="bi bi-person-gear"></i> My Account
            </a>
            <a href="{{ route('home') }}" class="admin-nav-link" target="_blank">
                <i class="bi bi-box-arrow-up-right"></i> View Site
            </a>
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit" class="admin-nav-link border-0 bg-transparent w-100 text-start">
                    <i class="bi bi-box-arrow-left"></i> Logout
                </button>
            </form>
        </nav>
    </div>

    <div class="admin-main">
        @if(session('success'))
        <div class="alert alert-success d-flex align-items-center mb-4">
            <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
        </div>
        @endif

        @if($errors->any())
        <div class="alert alert-danger mb-4">
            <ul class="mb-0 ps-3">
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>
