{{-- resources/views/pages/portfolio-detail.blade.php --}}
@extends('layouts.app')

@section('title', $item->title . ' | Braids by Kholeka')

@section('content')
<!-- PORTFOLIO DETAIL HERO -->
<section class="portfolio-detail-hero py-5">
    <div class="container">
        <a href="{{ route('portfolio') }}" class="back-link d-inline-flex align-items-center mb-4 text-pink fw-semibold">
            <i class="bi bi-arrow-left me-2"></i> Back to Portfolio
        </a>

        <div class="row g-5">
            <!-- Images -->
            <div class="col-lg-7">
                <div class="main-image-wrapper rounded-4 overflow-hidden shadow-lg mb-3">
                    <img src="{{ $item->image_url }}" alt="{{ $item->title }}" class="img-fluid w-100" style="max-height: 550px; object-fit: cover;">
                </div>

                @if(count($item->gallery_urls) > 1)
                <div class="gallery-strip d-flex gap-2 flex-wrap">
                    @foreach($item->gallery_urls as $imageUrl)
                    <div class="gallery-thumb rounded-3 overflow-hidden shadow-sm">
                        <img src="{{ $imageUrl }}" alt="{{ $item->title }}" style="width: 100px; height: 100px; object-fit: cover;">
                    </div>
                    @endforeach
                </div>
                @endif
            </div>

            <!-- Details -->
            <div class="col-lg-5">
                <div class="badge bg-pink-soft text-pink fw-semibold px-3 py-2 rounded-pill mb-3 d-inline-block">
                    {{ ucwords(str_replace('-', ' ', $item->category)) }}
                </div>

                <h1 class="display-5 fw-bold mb-4">{{ $item->title }}</h1>

                @if($item->description)
                <p class="lead mb-4">{{ $item->description }}</p>
                @endif

                <div class="detail-facts mb-4">
                    @if($item->style_type)
                    <div class="fact-row d-flex justify-content-between py-2 border-bottom">
                        <span class="text-muted">Style Type</span>
                        <span class="fw-semibold">{{ $item->style_type }}</span>
                    </div>
                    @endif
                    @if($item->hair_type)
                    <div class="fact-row d-flex justify-content-between py-2 border-bottom">
                        <span class="text-muted">Hair Type</span>
                        <span class="fw-semibold">{{ $item->hair_type }}</span>
                    </div>
                    @endif
                    @if($item->duration)
                    <div class="fact-row d-flex justify-content-between py-2 border-bottom">
                        <span class="text-muted">Duration</span>
                        <span class="fw-semibold">{{ $item->duration }}</span>
                    </div>
                    @endif
                </div>

                @if($item->tags && count($item->tags))
                <div class="tags-row d-flex flex-wrap gap-2 mb-4">
                    @foreach($item->tags as $tag)
                    <span class="tag-chip">#{{ $tag }}</span>
                    @endforeach
                </div>
                @endif

                @if($item->client_feedback)
                <blockquote class="blockquote p-4 bg-pink-soft rounded-4 border-start border-4 border-pink mb-4">
                    <i class="bi bi-quote fs-2 text-pink opacity-50 d-block mb-2"></i>
                    <p class="mb-2 fst-italic">"{{ $item->client_feedback }}"</p>
                    @if($item->client_initials)
                    <footer class="blockquote-footer mb-0">{{ $item->client_initials }}</footer>
                    @endif
                </blockquote>
                @endif

                <a href="{{ route('contact') }}" class="btn btn-pink btn-lg w-100 py-3">
                    <i class="bi bi-calendar-check me-2"></i> Book This Style
                </a>
            </div>
        </div>
    </div>
</section>

@if($relatedItems->count())
<!-- RELATED ITEMS -->
<section class="related-portfolio-section py-5 bg-pink-soft">
    <div class="container">
        <h2 class="h3 fw-bold mb-4 text-center">More From This Collection</h2>
        <div class="row g-4">
            @foreach($relatedItems as $related)
            <div class="col-md-6 col-lg-3">
                <a href="{{ route('portfolio.show', $related->slug) }}" class="related-item-card d-block rounded-4 overflow-hidden shadow-sm text-decoration-none">
                    <img src="{{ $related->image_url }}" alt="{{ $related->title }}" class="img-fluid w-100" style="height: 220px; object-fit: cover;">
                    <div class="p-3 bg-white">
                        <h5 class="mb-0 fw-semibold text-dark">{{ $related->title }}</h5>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<style>
    :root {
        --pink: #d45687;
        --pink-dark: #b03c6e;
        --pink-soft: #fce8f1;
    }
    .text-pink { color: var(--pink) !important; }
    .bg-pink-soft { background-color: var(--pink-soft) !important; }
    .border-pink { border-color: var(--pink) !important; }
    .btn-pink { background-color: var(--pink) !important; border-color: var(--pink) !important; color: white !important; }
    .btn-pink:hover { background-color: var(--pink-dark) !important; border-color: var(--pink-dark) !important; transform: translateY(-2px); }
    .back-link { transition: transform 0.3s ease; }
    .back-link:hover { transform: translateX(-4px); }
    .portfolio-detail-hero { background: linear-gradient(135deg, #fef5f9 0%, #fcf9fa 100%); }
    .fact-row { border-color: rgba(212, 86, 135, 0.1) !important; }
    .tag-chip { background: rgba(212, 86, 135, 0.08); color: var(--pink-dark); padding: 0.35rem 0.85rem; border-radius: 50px; font-size: 0.85rem; }
    .related-item-card { transition: all 0.3s ease; border: 1px solid rgba(212, 86, 135, 0.1); }
    .related-item-card:hover { transform: translateY(-6px); box-shadow: 0 15px 30px rgba(212, 86, 135, 0.15); }
</style>
@endsection
