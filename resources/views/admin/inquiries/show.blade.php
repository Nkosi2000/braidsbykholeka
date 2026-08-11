@extends('admin.layout')

@section('title', 'Inquiry from ' . $inquiry->name)

@section('content')
<a href="{{ route('admin.inquiries.index') }}" class="small text-pink fw-semibold d-inline-block mb-3">
    <i class="bi bi-arrow-left me-1"></i> Back to Inquiries
</a>

<h1 class="h3 fw-bold mb-4">Inquiry from {{ $inquiry->name }}</h1>

<div class="row g-4">
    <div class="col-lg-7">
        <div class="card bg-white p-4">
            <h2 class="h6 fw-bold mb-3">Client Details</h2>
            <dl class="row small mb-0">
                <dt class="col-4 text-muted">Name</dt>
                <dd class="col-8">{{ $inquiry->name }}</dd>
                <dt class="col-4 text-muted">Email</dt>
                <dd class="col-8"><a href="mailto:{{ $inquiry->email }}">{{ $inquiry->email }}</a></dd>
                <dt class="col-4 text-muted">Phone</dt>
                <dd class="col-8"><a href="tel:{{ $inquiry->phone }}">{{ $inquiry->phone }}</a></dd>
                <dt class="col-4 text-muted">Service Interest</dt>
                <dd class="col-8">{{ $inquiry->service_interest ?? 'Not specified' }}</dd>
                <dt class="col-4 text-muted">Preferred Date</dt>
                <dd class="col-8">{{ $inquiry->formatted_date }}</dd>
                <dt class="col-4 text-muted">Received</dt>
                <dd class="col-8">{{ $inquiry->created_at->format('F j, Y g:i A') }}</dd>
            </dl>
            <hr>
            <h2 class="h6 fw-bold mb-2">Message</h2>
            <p class="mb-0">{{ $inquiry->message }}</p>
        </div>
    </div>

    <div class="col-lg-5">
        <div class="card bg-white p-4">
            <h2 class="h6 fw-bold mb-3">Manage Inquiry</h2>
            <form method="POST" action="{{ route('admin.inquiries.update', $inquiry) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label small fw-semibold">Status</label>
                    <select name="status" class="form-select">
                        @foreach(['new', 'contacted', 'booked', 'cancelled'] as $status)
                        <option value="{{ $status }}" {{ $inquiry->status === $status ? 'selected' : '' }}>{{ ucfirst($status) }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label small fw-semibold">Admin Notes</label>
                    <textarea name="admin_notes" class="form-control" rows="5" placeholder="Internal notes about this inquiry...">{{ old('admin_notes', $inquiry->admin_notes) }}</textarea>
                </div>

                <button type="submit" class="btn btn-pink w-100">Save Changes</button>
            </form>
        </div>

        <form action="{{ route('admin.inquiries.destroy', $inquiry) }}" method="POST" class="mt-3" onsubmit="return confirm('Delete this inquiry permanently?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger w-100">
                <i class="bi bi-trash me-1"></i> Delete Inquiry
            </button>
        </form>
    </div>
</div>
@endsection
