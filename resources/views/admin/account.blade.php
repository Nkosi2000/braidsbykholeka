@extends('admin.layout')

@section('title', 'My Account')

@section('content')
<h1 class="h3 fw-bold mb-4">My Account</h1>

<div class="card bg-white p-4" style="max-width: 500px;">
    <form method="POST" action="{{ route('admin.account.update') }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label small fw-semibold">Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label small fw-semibold">Email Address</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>
        </div>

        <hr class="my-4">
        <p class="small text-muted">Leave the password fields blank to keep your current password.</p>

        <div class="mb-3">
            <label class="form-label small fw-semibold">Current Password</label>
            <input type="password" name="current_password" class="form-control" autocomplete="current-password">
        </div>

        <div class="mb-3">
            <label class="form-label small fw-semibold">New Password</label>
            <input type="password" name="password" class="form-control" autocomplete="new-password">
        </div>

        <div class="mb-4">
            <label class="form-label small fw-semibold">Confirm New Password</label>
            <input type="password" name="password_confirmation" class="form-control" autocomplete="new-password">
        </div>

        <button type="submit" class="btn btn-pink px-4">Save Changes</button>
    </form>
</div>
@endsection
