@extends('admin.layout')

@section('title', $item->exists ? 'Edit Portfolio Item' : 'Add Portfolio Item')

@section('content')
<h1 class="h3 fw-bold mb-4">{{ $item->exists ? 'Edit Portfolio Item' : 'Add Portfolio Item' }}</h1>

<div class="card bg-white p-4" style="max-width: 720px;">
    <form method="POST" action="{{ $item->exists ? route('admin.portfolio.update', $item) : route('admin.portfolio.store') }}" enctype="multipart/form-data">
        @csrf
        @if($item->exists)
            @method('PUT')
        @endif

        <div class="mb-3">
            <label class="form-label small fw-semibold">Title *</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $item->title) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label small fw-semibold">Description</label>
            <textarea name="description" class="form-control" rows="2">{{ old('description', $item->description) }}</textarea>
        </div>

        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label small fw-semibold">Category *</label>
                <input type="text" name="category" class="form-control" placeholder="e.g. knotless, box, protective" value="{{ old('category', $item->category) }}" required>
            </div>
            <div class="col-md-6">
                <label class="form-label small fw-semibold">Style Type</label>
                <input type="text" name="style_type" class="form-control" value="{{ old('style_type', $item->style_type) }}">
            </div>
        </div>

        <div class="row g-3 mt-3">
            <div class="col-md-6">
                <label class="form-label small fw-semibold">Hair Type</label>
                <input type="text" name="hair_type" class="form-control" value="{{ old('hair_type', $item->hair_type) }}">
            </div>
            <div class="col-md-6">
                <label class="form-label small fw-semibold">Duration</label>
                <input type="text" name="duration" class="form-control" value="{{ old('duration', $item->duration) }}">
            </div>
        </div>

        <div class="mb-3 mt-3">
            <label class="form-label small fw-semibold">Tags (comma separated)</label>
            <input type="text" name="tags" class="form-control" placeholder="knotless, medium, natural" value="{{ old('tags', $item->tags ? implode(', ', $item->tags) : '') }}">
        </div>

        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label small fw-semibold">Client Feedback</label>
                <textarea name="client_feedback" class="form-control" rows="2">{{ old('client_feedback', $item->client_feedback) }}</textarea>
            </div>
            <div class="col-md-6">
                <label class="form-label small fw-semibold">Client Initials</label>
                <input type="text" name="client_initials" class="form-control" value="{{ old('client_initials', $item->client_initials) }}">
            </div>
        </div>

        <div class="mb-3 mt-3">
            <label class="form-label small fw-semibold">Main Image {{ $item->exists ? '' : '*' }}</label>
            @if($item->image_url)
            <div class="mb-2">
                <img src="{{ $item->image_url }}" alt="" style="height: 90px; border-radius: 10px; object-fit: cover;">
            </div>
            @endif
            <input type="file" name="main_image" class="form-control" accept="image/*" {{ $item->exists ? '' : 'required' }}>
        </div>

        <div class="mb-3">
            <label class="form-label small fw-semibold">Gallery Images (add more)</label>
            @if(count($item->gallery_urls))
            <div class="mb-2 d-flex gap-2 flex-wrap">
                @foreach($item->gallery_urls as $url)
                <img src="{{ $url }}" alt="" style="width: 60px; height: 60px; border-radius: 8px; object-fit: cover;">
                @endforeach
            </div>
            @endif
            <input type="file" name="gallery_images[]" class="form-control" accept="image/*" multiple>
            <div class="form-text small">New uploads are added to the existing gallery.</div>
        </div>

        <div class="row g-3 align-items-center">
            <div class="col-md-6">
                <label class="form-label small fw-semibold">Sort Order</label>
                <input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', $item->sort_order ?? 0) }}">
            </div>
            <div class="col-md-6">
                <div class="form-check mt-4">
                    <input type="checkbox" name="is_featured" value="1" class="form-check-input" id="is_featured" {{ old('is_featured', $item->is_featured) ? 'checked' : '' }}>
                    <label class="form-check-label small fw-semibold" for="is_featured">Feature on homepage</label>
                </div>
            </div>
        </div>

        <div class="mt-4 d-flex gap-2">
            <button type="submit" class="btn btn-pink px-4">Save Portfolio Item</button>
            <a href="{{ route('admin.portfolio.index') }}" class="btn btn-outline-secondary px-4">Cancel</a>
        </div>
    </form>
</div>
@endsection
