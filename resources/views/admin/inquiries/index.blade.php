@extends('admin.layout')

@section('title', 'Inquiries')

@section('content')
<h1 class="h3 fw-bold mb-4">Inquiries</h1>

<div class="d-flex gap-2 mb-4">
    @foreach(['' => 'All', 'new' => 'New', 'contacted' => 'Contacted', 'booked' => 'Booked', 'cancelled' => 'Cancelled'] as $key => $label)
    <a href="{{ route('admin.inquiries.index', $key ? ['status' => $key] : []) }}"
       class="btn btn-sm {{ (string) $status === (string) $key ? 'btn-pink' : 'btn-outline-secondary' }}">
        {{ $label }}
    </a>
    @endforeach
</div>

<div class="card bg-white p-4">
    @if($inquiries->isEmpty())
    <p class="text-muted small mb-0">No inquiries found.</p>
    @else
    <div class="table-responsive">
        <table class="table admin-table align-middle">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Service</th>
                    <th>Preferred Date</th>
                    <th>Received</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($inquiries as $inquiry)
                <tr>
                    <td class="fw-semibold">{{ $inquiry->name }}</td>
                    <td class="small">
                        <div>{{ $inquiry->email }}</div>
                        <div class="text-muted">{{ $inquiry->phone }}</div>
                    </td>
                    <td>{{ $inquiry->service_interest ?? '—' }}</td>
                    <td>{{ $inquiry->formatted_date }}</td>
                    <td class="small text-muted">{{ $inquiry->created_at->diffForHumans() }}</td>
                    <td><span class="badge badge-status-{{ $inquiry->status }} rounded-pill px-3 py-2">{{ ucfirst($inquiry->status) }}</span></td>
                    <td><a href="{{ route('admin.inquiries.show', $inquiry) }}" class="btn btn-sm btn-outline-pink">View</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-3">
        {{ $inquiries->links() }}
    </div>
    @endif
</div>
@endsection
