@extends('admin.layout')

@section('title', $service->exists ? 'Edit Service' : 'Add Service')

@section('content')
<h1 class="h3 fw-bold mb-4">{{ $service->exists ? 'Edit Service' : 'Add Service' }}</h1>

<div class="card bg-white p-4" style="max-width: 720px;">
    <form method="POST" action="{{ $service->exists ? route('admin.services.update', $service) : route('admin.services.store') }}" enctype="multipart/form-data">
        @csrf
        @if($service->exists)
            @method('PUT')
        @endif

        <div class="mb-3">
            <label class="form-label small fw-semibold">Name *</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $service->name) }}" required>
        </div>

        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label small fw-semibold">Category *</label>
                <input type="text" name="category" class="form-control" value="{{ old('category', $service->category ?? 'braiding') }}" required>
            </div>
            <div class="col-md-6">
                <label class="form-label small fw-semibold">Starting Price (R)</label>
                <input type="number" step="0.01" name="starting_price" class="form-control" value="{{ old('starting_price', $service->starting_price) }}">
            </div>
        </div>

        <div class="mb-3 mt-3">
            <label class="form-label small fw-semibold">Short Description *</label>
            <textarea name="description" class="form-control" rows="2" required>{{ old('description', $service->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label small fw-semibold">Detailed Description</label>
            <textarea name="detailed_description" class="form-control" rows="4">{{ old('detailed_description', $service->detailed_description) }}</textarea>
        </div>

        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label small fw-semibold">Duration</label>
                <input type="text" name="duration" class="form-control" placeholder="e.g. 4-6 hours" value="{{ old('duration', $service->duration) }}">
            </div>
            <div class="col-md-6">
                <label class="form-label small fw-semibold">Bootstrap Icon Class</label>
                <input type="text" name="icon_class" class="form-control" placeholder="e.g. bi-magic" value="{{ old('icon_class', $service->icon_class) }}">
            </div>
        </div>

        <div class="mb-3 mt-3">
            <label class="form-label small fw-semibold">Features (one per line)</label>
            <textarea name="features" class="form-control" rows="4">{{ old('features', $service->features ? implode("\n", $service->features) : '') }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label small fw-semibold">Aftercare Tips (one per line)</label>
            <textarea name="aftercare_tips" class="form-control" rows="4">{{ old('aftercare_tips', $service->aftercare_tips ? implode("\n", $service->aftercare_tips) : '') }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label small fw-semibold">Image</label>
            @if($service->image_url)
            <div class="mb-2">
                <img src="{{ $service->image_url }}" alt="" style="height: 90px; border-radius: 10px; object-fit: cover;">
            </div>
            @endif
            <input type="file" name="image" class="form-control" accept="image/*">
        </div>

        <div class="row g-3 align-items-center">
            <div class="col-md-6">
                <label class="form-label small fw-semibold">Sort Order</label>
                <input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', $service->sort_order ?? 0) }}">
            </div>
            <div class="col-md-6">
                <div class="form-check mt-4">
                    <input type="checkbox" name="is_featured" value="1" class="form-check-input" id="is_featured" {{ old('is_featured', $service->is_featured) ? 'checked' : '' }}>
                    <label class="form-check-label small fw-semibold" for="is_featured">Feature on homepage</label>
                </div>
            </div>
        </div>

        <div class="mt-4 d-flex gap-2">
            <button type="submit" class="btn btn-pink px-4">Save Service</button>
            <a href="{{ route('admin.services.index') }}" class="btn btn-outline-secondary px-4">Cancel</a>
        </div>
    </form>
</div>
@endsection
