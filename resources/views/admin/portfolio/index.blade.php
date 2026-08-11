@extends('admin.layout')

@section('title', 'Portfolio')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 fw-bold mb-0">Portfolio</h1>
    <a href="{{ route('admin.portfolio.create') }}" class="btn btn-pink">
        <i class="bi bi-plus-lg me-1"></i> Add Portfolio Item
    </a>
</div>

<div class="card bg-white p-4">
    @if($items->isEmpty())
    <p class="text-muted small mb-0">No portfolio items yet. Add your first one.</p>
    @else
    <div class="table-responsive">
        <table class="table admin-table align-middle">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Featured</th>
                    <th>Order</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                <tr>
                    <td><img src="{{ $item->image_url }}" alt="" style="width: 56px; height: 56px; object-fit: cover; border-radius: 8px;"></td>
                    <td class="fw-semibold">{{ $item->title }}</td>
                    <td>{{ ucwords(str_replace('-', ' ', $item->category)) }}</td>
                    <td>
                        @if($item->is_featured)
                        <span class="badge bg-pink-soft text-pink rounded-pill">Featured</span>
                        @else
                        <span class="text-muted small">—</span>
                        @endif
                    </td>
                    <td>{{ $item->sort_order }}</td>
                    <td class="text-end">
                        <a href="{{ route('portfolio.show', $item->slug) }}" target="_blank" class="btn btn-sm btn-outline-secondary">
                            <i class="bi bi-eye"></i>
                        </a>
                        <a href="{{ route('admin.portfolio.edit', $item) }}" class="btn btn-sm btn-outline-pink">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <form action="{{ route('admin.portfolio.destroy', $item) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this portfolio item?');">
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
