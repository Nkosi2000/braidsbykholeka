@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
<h1 class="h3 fw-bold mb-4">Dashboard</h1>

<div class="row g-4 mb-4">
    <div class="col-md-4">
        <div class="card stat-card p-4 bg-white">
            <div class="d-flex justify-content-between align-items-start">
                <div>
                    <div class="text-muted small mb-1">New Inquiries</div>
                    <div class="h2 fw-bold text-pink mb-0">{{ $newInquiryCount }}</div>
                </div>
                <div class="bg-pink-soft rounded-circle p-3">
                    <i class="bi bi-envelope-open fs-4 text-pink"></i>
                </div>
            </div>
            <a href="{{ route('admin.inquiries.index', ['status' => 'new']) }}" class="small text-pink fw-semibold mt-3 d-inline-block">View inquiries &rarr;</a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card stat-card p-4 bg-white">
            <div class="d-flex justify-content-between align-items-start">
                <div>
                    <div class="text-muted small mb-1">Services</div>
                    <div class="h2 fw-bold text-pink mb-0">{{ $serviceCount }}</div>
                </div>
                <div class="bg-pink-soft rounded-circle p-3">
                    <i class="bi bi-scissors fs-4 text-pink"></i>
                </div>
            </div>
            <a href="{{ route('admin.services.index') }}" class="small text-pink fw-semibold mt-3 d-inline-block">Manage services &rarr;</a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card stat-card p-4 bg-white">
            <div class="d-flex justify-content-between align-items-start">
                <div>
                    <div class="text-muted small mb-1">Portfolio Items</div>
                    <div class="h2 fw-bold text-pink mb-0">{{ $portfolioCount }}</div>
                </div>
                <div class="bg-pink-soft rounded-circle p-3">
                    <i class="bi bi-images fs-4 text-pink"></i>
                </div>
            </div>
            <a href="{{ route('admin.portfolio.index') }}" class="small text-pink fw-semibold mt-3 d-inline-block">Manage portfolio &rarr;</a>
        </div>
    </div>
</div>

<div class="card bg-white p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="h5 fw-bold mb-0">Recent Inquiries</h2>
        <a href="{{ route('admin.inquiries.index') }}" class="small text-pink fw-semibold">View all &rarr;</a>
    </div>

    @if($recentInquiries->isEmpty())
    <p class="text-muted small mb-0">No inquiries yet.</p>
    @else
    <div class="table-responsive">
        <table class="table admin-table align-middle">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Service</th>
                    <th>Received</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($recentInquiries as $inquiry)
                <tr>
                    <td class="fw-semibold">{{ $inquiry->name }}</td>
                    <td>{{ $inquiry->service_interest ?? '—' }}</td>
                    <td class="small text-muted">{{ $inquiry->created_at->diffForHumans() }}</td>
                    <td><span class="badge badge-status-{{ $inquiry->status }} rounded-pill px-3 py-2">{{ ucfirst($inquiry->status) }}</span></td>
                    <td><a href="{{ route('admin.inquiries.show', $inquiry) }}" class="btn btn-sm btn-outline-pink">View</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</div>
@endsection
