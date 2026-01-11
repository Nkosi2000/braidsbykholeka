{{-- resources/views/pages/services.blade.php --}}
@extends('layouts.app')

@section('title', $title ?? 'Services & Pricing | Luxury Braiding')

@section('content')
<section class="services-section fade-in">
    <div class="container">
        <h1 class="section-title">Our Premium Services</h1>
        <p class="section-subtitle">Masterful braiding artistry with meticulous attention to detail</p>
        
        @foreach($groupedServices as $category => $services)
        <div class="mb-5">
            <h3 class="category-title mb-4 text-center">{{ ucfirst($category) }} Services</h3>
            <div class="row g-4">
                @foreach($services as $service)
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        @if($service->icon_class)
                        <div class="service-icon">
                            <i class="bi {{ $service->icon_class }}"></i>
                        </div>
                        @endif
                        <h3 class="service-title">{{ $service->name }}</h3>
                        <p class="mb-3">{{ $service->description }}</p>
                        
                        <div class="service-details">
                            @if($service->duration)
                            <div class="detail-item">
                                <i class="bi bi-clock"></i>
                                <span>{{ $service->duration }}</span>
                            </div>
                            @endif
                            
                            @if($service->starting_price)
                            <div class="detail-item">
                                <i class="bi bi-currency-dollar"></i>
                                <span>Starting at ${{ number_format($service->starting_price, 0) }}</span>
                            </div>
                            @endif
                        </div>
                        
                        <div class="mt-3">
                            @if($service->features && is_array($service->features))
                            <ul class="service-features">
                                @foreach(array_slice($service->features, 0, 3) as $feature)
                                <li><i class="bi bi-check-circle text-amethyst me-2"></i>{{ $feature }}</li>
                                @endforeach
                            </ul>
                            @endif
                        </div>
                        
                        <div class="mt-4">
                            <a href="{{ route('services.show', $service->slug) }}" 
                               class="btn btn-outline-amethyst w-100">
                                View Details & Pricing
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
        
        <div class="text-center mt-5">
            <h4>Ready to book your appointment?</h4>
            <p class="opacity-75 mb-4">Contact us for a personalized consultation and exact pricing</p>
            <a href="{{ route('contact') }}" class="btn btn-reserve">
                <i class="bi bi-calendar-check me-2"></i> Book Consultation
            </a>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
.category-title {
    font-family: 'Cormorant Garamond', serif;
    font-size: 2rem;
    color: var(--velvet);
    font-weight: 500;
    position: relative;
    display: inline-block;
    padding-bottom: 10px;
}

.category-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 2px;
    background: linear-gradient(90deg, var(--amethyst), var(--champagne));
}

.service-details {
    display: flex;
    gap: 1rem;
    margin: 1rem 0;
    flex-wrap: wrap;
}

.detail-item {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.9rem;
    color: var(--velvet);
    opacity: 0.8;
}

.service-features {
    list-style: none;
    padding: 0;
    margin: 0;
}

.service-features li {
    margin-bottom: 0.5rem;
    font-size: 0.9rem;
}

.btn-outline-amethyst {
    border: 1px solid var(--amethyst);
    color: var(--amethyst);
    background: transparent;
    transition: var(--fast-transition);
}

.btn-outline-amethyst:hover {
    background: var(--amethyst);
    color: var(--porcelain);
}
</style>
@endpush