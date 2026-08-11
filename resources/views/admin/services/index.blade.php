@extends('admin.layout')

@section('title', 'Services')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 fw-bold mb-0">Services</h1>
    <a href="{{ route('admin.services.create') }}" class="btn btn-pink">
        <i class="bi bi-plus-lg me-1"></i> Add Service
    </a>
</div>

<div class="card bg-white p-4">
    @if($services->isEmpty())
    <p class="text-muted small mb-0">No services yet. Add your first one.</p>
    @else
    <div class="table-responsive">
        <table class="table admin-table align-middle">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Featured</th>
                    <th>Order</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($services as $service)
                <tr>
                    <td class="fw-semibold">{{ $service->name }}</td>
                    <td>{{ ucfirst($service->category) }}</td>
                    <td>{{ $service->formatted_price }}</td>
                    <td>
                        @if($service->is_featured)
                        <span class="badge bg-pink-soft text-pink rounded-pill">Featured</span>
                        @else
                        <span class="text-muted small">—</span>
                        @endif
                    </td>
                    <td>{{ $service->sort_order }}</td>
                    <td class="text-end">
                        <a href="{{ route('services.show', $service->slug) }}" target="_blank" class="btn btn-sm btn-outline-secondary">
                            <i class="bi bi-eye"></i>
                        </a>
                        <a href="{{ route('admin.services.edit', $service) }}" class="btn btn-sm btn-outline-pink">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <form action="{{ route('admin.services.destroy', $service) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this service?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</div>
@endsection
