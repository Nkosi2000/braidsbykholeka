{{-- resources/views/pages/service-detail.blade.php --}}
@extends('layouts.app')

@section('title', $service->name . ' | Braids by Kholeka')

@section('content')
<!-- SERVICE DETAIL HERO -->
<section class="service-detail-hero py-5">
    <div class="container">
        <a href="{{ route('services.index') }}" class="back-link d-inline-flex align-items-center mb-4 text-pink fw-semibold">
            <i class="bi bi-arrow-left me-2"></i> Back to All Services
        </a>

        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="badge bg-pink-soft text-pink fw-semibold px-3 py-2 rounded-pill mb-3 d-inline-block">
                    {{ ucfirst($service->category) }}
                </div>

                <h1 class="display-4 fw-bold mb-4">{{ $service->name }}</h1>

                <p class="lead mb-4">{{ $service->description }}</p>

                <div class="service-meta-row d-flex flex-wrap gap-3 mb-4">
                    @if($service->duration)
                    <div class="meta-pill d-flex align-items-center">
                        <i class="bi bi-clock text-pink me-2"></i>
                        <span class="fw-semibold">{{ $service->duration }}</span>
                    </div>
                    @endif
                    @if($service->starting_price)
                    <div class="meta-pill d-flex align-items-center">
                        <i class="bi bi-tag text-pink me-2"></i>
                        <span class="fw-semibold">From R{{ number_format($service->starting_price, 0) }}</span>
                    </div>
                    @endif
                </div>

                <a href="{{ route('contact') }}?service={{ urlencode($service->name) }}" class="btn btn-pink btn-lg px-4 py-3">
                    <i class="bi bi-calendar-check me-2"></i> Book This Style
                </a>
            </div>

            <div class="col-lg-6">
                <div class="service-hero-image rounded-4 overflow-hidden shadow-lg d-flex align-items-center justify-content-center bg-pink-soft" style="height: 380px;">
                    @if($service->image_path)
                        <img src="{{ $service->image_url }}" alt="{{ $service->name }}" class="img-fluid w-100 h-100" style="object-fit: cover;">
                    @else
                        <i class="bi {{ $service->icon_class ?? 'bi-scissors' }} text-pink" style="font-size: 6rem;"></i>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

<!-- DETAILS SECTION -->
<section class="service-details-section py-5 bg-pink-soft">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-7">
                @if($service->detailed_description)
                <div class="mb-5">
                    <h2 class="h3 fw-bold mb-3">About This Style</h2>
                    <p class="text-muted">{{ $service->detailed_description }}</p>
                </div>
                @endif

                @if($service->features && is_array($service->features) && count($service->features))
                <div>
                    <h2 class="h3 fw-bold mb-3">What's Included</h2>
                    <ul class="list-unstyled">
                        @foreach($service->features as $feature)
                        <li class="d-flex align-items-start mb-3">
                            <i class="bi bi-check-circle-fill text-pink me-3 mt-1"></i>
                            <span>{{ $feature }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>

            <div class="col-lg-5">
                @if($service->aftercare_tips && is_array($service->aftercare_tips) && count($service->aftercare_tips))
                <div class="aftercare-card bg-white rounded-4 p-4 shadow-sm">
                    <h3 class="h5 fw-bold mb-3">
                        <i class="bi bi-heart text-pink me-2"></i> Aftercare Tips
                    </h3>
                    <ul class="list-unstyled mb-0">
                        @foreach($service->aftercare_tips as $tip)
                        <li class="d-flex align-items-start mb-3">
                            <i class="bi bi-stars text-pink me-3 mt-1"></i>
                            <span class="small">{{ $tip }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>

@if($relatedServices->count())
<!-- RELATED SERVICES -->
<section class="related-services-section py-5">
    <div class="container">
        <h2 class="h3 fw-bold mb-4 text-center">You May Also Like</h2>
        <div class="row g-4 justify-content-center">
            @foreach($relatedServices as $related)
            <div class="col-md-4">
                <a href="{{ route('services.show', $related->slug) }}" class="related-service-card d-block bg-white rounded-4 p-4 h-100 text-decoration-none">
                    <div class="icon-wrapper bg-pink-soft rounded-circle p-3 d-inline-block mb-3">
                        <i class="bi {{ $related->icon_class ?? 'bi-scissors' }} fs-3 text-pink"></i>
                    </div>
                    <h4 class="h5 fw-bold mb-2">{{ $related->name }}</h4>
                    <p class="text-muted small mb-0">{{ $related->description }}</p>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- CTA -->
<section class="service-cta-section py-5">
    <div class="container">
        <div class="cta-card bg-gradient-pink rounded-4 p-5 text-center text-white">
            <h2 class="display-5 fw-bold mb-3">Ready to Book {{ $service->name }}?</h2>
            <p class="lead mb-4 opacity-90">Let's create something beautiful together.</p>
            <a href="{{ route('contact') }}?service={{ urlencode($service->name) }}" class="btn btn-light btn-lg px-4 py-3 text-pink fw-bold">
                <i class="bi bi-calendar-check me-2"></i> Book Now
            </a>
        </div>
    </div>
</section>

<style>
    :root {
        --pink: #d45687;
        --pink-dark: #b03c6e;
        --pink-soft: #fce8f1;
    }
    .text-pink { color: var(--pink) !important; }
    .bg-pink-soft { background-color: var(--pink-soft) !important; }
    .bg-gradient-pink { background: linear-gradient(135deg, var(--pink), var(--pink-dark)) !important; }
    .btn-pink { background-color: var(--pink) !important; border-color: var(--pink) !important; color: white !important; }
    .btn-pink:hover { background-color: var(--pink-dark) !important; border-color: var(--pink-dark) !important; transform: translateY(-2px); }
    .back-link { transition: transform 0.3s ease; }
    .back-link:hover { transform: translateX(-4px); }
    .service-detail-hero { background: linear-gradient(135deg, #fef5f9 0%, #fcf9fa 100%); }
    .meta-pill { background: white; padding: 0.65rem 1.25rem; border-radius: 50px; border: 1px solid rgba(212, 86, 135, 0.15); }
    .aftercare-card { border: 1px solid rgba(212, 86, 135, 0.1); }
    .related-service-card { border: 1px solid rgba(212, 86, 135, 0.1); transition: all 0.3s ease; }
    .related-service-card:hover { transform: translateY(-6px); box-shadow: 0 15px 30px rgba(212, 86, 135, 0.15); }
</style>
@endsection
