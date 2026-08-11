{{-- resources/views/pages/services.blade.php --}}
@extends('layouts.app')

@section('title', 'Services & Pricing | Luxury Braiding by Kholeka')

@section('content')
<!-- SERVICES HEADER -->
<div class="services-header py-5">
    <div class="container text-center">
        <h1 class="display-3 fw-bold mb-4 text-pink">
            <span class="d-block">Signature Braiding</span>
            <span class="text-gradient">Services</span>
        </h1>
        <p class="lead text-muted max-w-2xl mx-auto">
            Discover our exclusive collection of premium braiding styles, each crafted with precision 
            and artistic excellence for lasting beauty and protection.
        </p>
    </div>
</div>

<!-- SERVICES GRID SECTION -->
<section class="services-grid-section py-5">
    <div class="container">
        @foreach($groupedServices as $category => $services)
        <div class="category-section mb-6">
            <!-- Category Header with Decorative Element -->
            <div class="category-header mb-5 text-center position-relative">
                <div class="category-icon mx-auto mb-3">
                    <div class="icon-wrapper bg-pink-soft rounded-circle p-4 d-inline-block">
                        <i class="bi bi-scissors fs-2 text-pink"></i>
                    </div>
                </div>
                <h2 class="category-title mb-3">{{ ucfirst($category) }} Collection</h2>
                <div class="category-divider mx-auto"></div>
            </div>
            
            <!-- Services Grid -->
            <div class="row g-4 justify-content-center">
                @foreach($services as $service)
                <div class="col-lg-4 col-md-6">
                    <div class="service-card-elegant">
                        <!-- Card Header with Image Placeholder -->
                        <div class="service-card-header position-relative">
                            <div class="service-image-placeholder bg-pink-soft rounded-top-4 d-flex align-items-center justify-content-center">
                                @if($service->icon_class)
                                    <i class="bi {{ $service->icon_class }} fs-1 text-pink"></i>
                                @else
                                    <i class="bi bi-scissors fs-1 text-pink"></i>
                                @endif
                            </div>
                            <div class="service-badge position-absolute top-0 end-0 m-3">
                                <span class="badge bg-pink text-white px-3 py-2">
                                    <i class="bi bi-star-fill me-1"></i> Popular
                                </span>
                            </div>
                        </div>
                        
                        <!-- Card Body -->
                        <div class="service-card-body p-4">
                            <h3 class="service-title h4 fw-bold mb-3">{{ $service->name }}</h3>
                            <p class="service-description text-muted mb-4">{{ $service->description }}</p>
                            
                            <!-- Service Meta -->
                            <div class="service-meta mb-4">
                                <div class="row g-3">
                                    @if($service->duration)
                                    <div class="col-6">
                                        <div class="meta-item text-center p-3 rounded-3 bg-pink-soft">
                                            <div class="meta-icon mb-2">
                                                <i class="bi bi-clock fs-5 text-pink"></i>
                                            </div>
                                            <div class="meta-text">
                                                <div class="small fw-semibold">{{ $service->duration }}</div>
                                                <div class="x-small text-muted">Duration</div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    
                                    @if($service->starting_price)
                                    <div class="col-6">
                                        <div class="meta-item text-center p-3 rounded-3 bg-pink-soft">
                                            <div class="meta-icon mb-2">
                                                <i class="bi bi-tag fs-5 text-pink"></i>
                                            </div>
                                            <div class="meta-text">
                                                <div class="small fw-bold text-pink">R{{ number_format($service->starting_price, 0) }}</div>
                                                <div class="x-small text-muted">Starting From</div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            
                            <!-- Features List -->
                            @if($service->features && is_array($service->features))
                            <div class="service-features mb-4">
                                <div class="features-title small fw-semibold text-uppercase letter-spacing-1 mb-3">
                                    <i class="bi bi-check-circle me-2 text-pink"></i>What's Included
                                </div>
                                <ul class="features-list list-unstyled">
                                    @foreach(array_slice($service->features, 0, 3) as $feature)
                                    <li class="mb-2">
                                        <span class="feature-dot bg-pink rounded-circle me-2"></span>
                                        <span class="small">{{ $feature }}</span>
                                    </li>
                                    @endforeach
                                    @if(count($service->features) > 3)
                                    <li class="mb-2">
                                        <span class="feature-dot bg-pink-light rounded-circle me-2"></span>
                                        <span class="small text-muted">+{{ count($service->features) - 3 }} more features</span>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                            @endif
                            
                            <!-- Action Button -->
                            <div class="service-action mt-4">
                                <a href="{{ route('contact') }}?service={{ urlencode($service->name) }}" 
                                   class="btn btn-pink w-100 py-3">
                                    <i class="bi bi-calendar-check me-2"></i>
                                    Book This Style
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- PRICING GUIDE SECTION -->
<section class="pricing-guide-section py-5 bg-pink-soft">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="pricing-guide-content">
                    <h2 class="display-5 fw-bold mb-4">
                        Transparent<br>
                        <span class="text-gradient">Pricing Guide</span>
                    </h2>
                    
                    <p class="lead mb-4">
                        We believe in clear, upfront pricing. Each quote is personalized based on 
                        hair length, density, and desired complexity.
                    </p>
                    
                    <div class="pricing-factors">
                        <div class="factor-item d-flex align-items-center mb-3">
                            <div class="factor-icon bg-white text-pink rounded-circle p-2 me-3">
                                <i class="bi bi-rulers"></i>
                            </div>
                            <div>
                                <h4 class="h6 fw-bold mb-1">Hair Length</h4>
                                <p class="small text-muted mb-0">Short, medium, long, or extra long</p>
                            </div>
                        </div>
                        
                        <div class="factor-item d-flex align-items-center mb-3">
                            <div class="factor-icon bg-white text-pink rounded-circle p-2 me-3">
                                <i class="bi bi-droplet"></i>
                            </div>
                            <div>
                                <h4 class="h6 fw-bold mb-1">Hair Density</h4>
                                <p class="small text-muted mb-0">Fine, medium, or thick hair texture</p>
                            </div>
                        </div>
                        
                        <div class="factor-item d-flex align-items-center">
                            <div class="factor-icon bg-white text-pink rounded-circle p-2 me-3">
                                <i class="bi bi-stars"></i>
                            </div>
                            <div>
                                <h4 class="h6 fw-bold mb-1">Style Complexity</h4>
                                <p class="small text-muted mb-0">Simple, medium, or intricate designs</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="pricing-card bg-white rounded-4 p-4 p-lg-5 shadow-sm">
                    <h3 class="h4 fw-bold mb-4 text-center">Price Range Guide</h3>
                    
                    <div class="price-ranges mb-4">
                        @php
                            $ranges = [
                                ['min' => 800, 'max' => 1200, 'label' => 'Simple Styles', 'desc' => 'Basic braids & twists'],
                                ['min' => 1200, 'max' => 1800, 'label' => 'Medium Styles', 'desc' => 'Knotless & box braids'],
                                ['min' => 1800, 'max' => 2500, 'label' => 'Complex Styles', 'desc' => 'Intricate designs & beads'],
                            ];
                        @endphp
                        
                        @foreach($ranges as $range)
                        <div class="price-range-item mb-3 p-3 rounded-3 border">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h4 class="h6 fw-bold mb-0">{{ $range['label'] }}</h4>
                                <div class="price-tag bg-pink text-white px-3 py-1 rounded-pill small">
                                    R{{ $range['min'] }} - R{{ $range['max'] }}
                                </div>
                            </div>
                            <p class="small text-muted mb-0">{{ $range['desc'] }}</p>
                        </div>
                        @endforeach
                    </div>
                    
                    <div class="text-center">
                        <a href="{{ route('contact') }}" class="btn btn-outline-pink">
                            <i class="bi bi-chat-dots me-2"></i> Get Exact Quote
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PROCESS SECTION -->
<section class="process-section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold mb-3">Our Service Process</h2>
            <p class="lead text-muted">From consultation to completion, experience excellence at every step</p>
        </div>
        
        <div class="process-steps">
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="process-step text-center p-4">
                        <div class="step-number bg-pink text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3">
                            <span class="h4 mb-0">1</span>
                        </div>
                        <h4 class="h5 fw-bold mb-3">Consultation</h4>
                        <p class="text-muted small">Discuss your vision, assess your hair, and select the perfect style.</p>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="process-step text-center p-4">
                        <div class="step-number bg-pink text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3">
                            <span class="h4 mb-0">2</span>
                        </div>
                        <h4 class="h5 fw-bold mb-3">Preparation</h4>
                        <p class="text-muted small">Gentle washing, conditioning, and detangling with premium products.</p>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="process-step text-center p-4">
                        <div class="step-number bg-pink text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3">
                            <span class="h4 mb-0">3</span>
                        </div>
                        <h4 class="h5 fw-bold mb-3">Artistry</h4>
                        <p class="text-muted small">Meticulous braiding with precision technique and attention to detail.</p>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="process-step text-center p-4">
                        <div class="step-number bg-pink text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3">
                            <span class="h4 mb-0">4</span>
                        </div>
                        <h4 class="h5 fw-bold mb-3">Completion</h4>
                        <p class="text-muted small">Final styling, product application, and aftercare instructions.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FINAL CTA SECTION -->
<section class="final-cta-section py-5">
    <div class="container">
        <div class="cta-card bg-gradient-pink rounded-4 p-5 text-center text-white position-relative overflow-hidden">
            <!-- Decorative elements -->
            <div class="cta-dot dot-1"></div>
            <div class="cta-dot dot-2"></div>
            <div class="cta-dot dot-3"></div>
            
            <div class="position-relative" style="z-index: 2;">
                <h2 class="display-5 fw-bold mb-4">Ready to Transform Your Look?</h2>
                <p class="lead mb-4 opacity-90">
                    Book your appointment today and experience luxury braiding artistry.
                </p>
                
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                    <a href="{{ route('contact') }}" class="btn btn-light btn-lg px-4 py-3 text-pink fw-bold">
                        <i class="bi bi-calendar-check fs-5 me-2"></i>
                        Book Now
                    </a>
                    <a href="tel:+27821234567" class="btn btn-outline-light btn-lg px-4 py-3">
                        <i class="bi bi-telephone fs-5 me-2"></i>
                        Call to Book
                    </a>
                </div>
                
                <div class="mt-4 pt-2">
                    <p class="small opacity-75">
                        <i class="bi bi-clock me-1"></i>
                        Appointments available Monday - Saturday, 9 AM - 6 PM
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Color Variables */
    :root {
        --pink: #d45687;
        --pink-dark: #b03c6e;
        --pink-light: #e875a3;
        --pink-soft: #fce8f1;
        --pink-glow: rgba(212, 86, 135, 0.4);
    }
    
    /* Base Styles */
    .max-w-2xl {
        max-width: 36rem;
    }
    
    .letter-spacing-1 {
        letter-spacing: 1px;
    }
    
    /* Color Classes */
    .text-pink { color: var(--pink) !important; }
    .bg-pink { background-color: var(--pink) !important; }
    .bg-pink-light { background-color: var(--pink-light) !important; }
    .bg-pink-soft { background-color: var(--pink-soft) !important; }
    
    .text-gradient {
        background: linear-gradient(90deg, var(--pink), var(--pink-dark));
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        display: inline-block;
    }
    
    .bg-gradient-pink {
        background: linear-gradient(135deg, var(--pink), var(--pink-dark)) !important;
    }
    
    /* Button Styles */
    .btn-pink { 
        background-color: var(--pink) !important;
        border-color: var(--pink) !important;
        color: white !important;
        transition: all 0.3s ease;
    }
    .btn-pink:hover { 
        background-color: var(--pink-dark) !important;
        border-color: var(--pink-dark) !important;
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(212, 86, 135, 0.2);
    }
    .btn-outline-pink { 
        border: 2px solid var(--pink) !important;
        color: var(--pink) !important;
        background: transparent;
        transition: all 0.3s ease;
    }
    .btn-outline-pink:hover { 
        background-color: var(--pink) !important;
        color: white !important;
        transform: translateY(-2px);
    }
    .btn-outline-light {
        border: 2px solid rgba(255, 255, 255, 0.5) !important;
        color: white !important;
        background: transparent;
        transition: all 0.3s ease;
    }
    .btn-outline-light:hover {
        background-color: white !important;
        color: var(--pink) !important;
        border-color: white !important;
    }
    
    /* Services Header */
    .services-header {
        background: linear-gradient(135deg, #fef5f9 0%, #fcf9fa 100%);
        border-bottom: 1px solid rgba(212, 86, 135, 0.1);
    }
    
    /* Category Header */
    .category-header {
        padding-top: 3rem;
    }
    
    .icon-wrapper {
        width: 80px;
        height: 80px;
        transition: transform 0.3s ease;
    }
    
    .icon-wrapper:hover {
        transform: scale(1.1) rotate(5deg);
    }
    
    .category-title {
        font-family: 'Cormorant Garamond', serif;
        font-size: 2.5rem;
        color: var(--pink-dark);
        font-weight: 500;
    }
    
    .category-divider {
        width: 80px;
        height: 3px;
        background: linear-gradient(90deg, var(--pink), var(--pink-light));
        border-radius: 2px;
    }
    
    /* Service Card Elegant */
    .service-card-elegant {
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        height: 100%;
        border: 1px solid rgba(212, 86, 135, 0.1);
    }
    
    .service-card-elegant:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(212, 86, 135, 0.15);
        border-color: rgba(212, 86, 135, 0.2);
    }
    
    .service-image-placeholder {
        height: 180px;
        background: linear-gradient(135deg, rgba(212, 86, 135, 0.1) 0%, rgba(232, 117, 163, 0.1) 100%);
    }
    
    .service-title {
        color: var(--pink-dark);
        font-family: 'Cormorant Garamond', serif;
        font-weight: 500;
    }
    
    .meta-item {
        transition: all 0.3s ease;
        border: 1px solid transparent;
    }
    
    .meta-item:hover {
        border-color: rgba(212, 86, 135, 0.2);
        transform: translateY(-2px);
    }
    
    .feature-dot {
        display: inline-block;
        width: 8px;
        height: 8px;
    }
    
    /* Pricing Guide */
    .pricing-guide-section {
        background: linear-gradient(135deg, #fef5f9 0%, #fcf9fa 100%);
        border-top: 1px solid rgba(212, 86, 135, 0.1);
        border-bottom: 1px solid rgba(212, 86, 135, 0.1);
    }
    
    .pricing-card {
        border: 2px solid rgba(212, 86, 135, 0.1);
    }
    
    .price-range-item {
        transition: all 0.3s ease;
        border-color: rgba(212, 86, 135, 0.1) !important;
    }
    
    .price-range-item:hover {
        border-color: var(--pink) !important;
        box-shadow: 0 5px 15px rgba(212, 86, 135, 0.1);
    }
    
    .price-tag {
        font-size: 0.8rem;
    }
    
    /* Process Section */
    .process-step {
        transition: all 0.3s ease;
        border-radius: 15px;
        border: 1px solid transparent;
    }
    
    .process-step:hover {
        border-color: rgba(212, 86, 135, 0.2);
        box-shadow: 0 10px 25px rgba(212, 86, 135, 0.1);
        transform: translateY(-5px);
    }
    
    .step-number {
        width: 50px;
        height: 50px;
        font-size: 1.2rem;
    }
    
    /* Final CTA */
    .final-cta-section {
        background: #fef5f9;
    }
    
    .cta-dot {
        position: absolute;
        width: 100px;
        height: 100px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.1);
        z-index: 1;
    }
    
    .cta-dot.dot-1 {
        top: -30px;
        left: -30px;
    }
    
    .cta-dot.dot-2 {
        bottom: -30px;
        right: -30px;
        width: 150px;
        height: 150px;
    }
    
    .cta-dot.dot-3 {
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 200px;
        height: 200px;
        opacity: 0.05;
    }
    
    /* Responsive Design */
    @media (max-width: 1199px) {
        .display-5 {
            font-size: 2.5rem;
        }
        
        .category-title {
            font-size: 2.2rem;
        }
    }
    
    @media (max-width: 991px) {
        .display-3 {
            font-size: 2.5rem;
        }
        
        .display-5 {
            font-size: 2.2rem;
        }
        
        .category-title {
            font-size: 2rem;
        }
        
        .process-step {
            padding: 1.5rem !important;
        }
    }
    
    @media (max-width: 768px) {
        .display-3 {
            font-size: 2.2rem;
        }
        
        .display-5 {
            font-size: 2rem;
        }
        
        .category-title {
            font-size: 1.8rem;
        }
        
        .service-card-body {
            padding: 1.5rem !important;
        }
        
        .pricing-card {
            padding: 1.5rem !important;
        }
        
        .cta-card {
            padding: 2rem !important;
        }
    }
    
    @media (max-width: 576px) {
        .display-3 {
            font-size: 2rem;
        }
        
        .category-title {
            font-size: 1.6rem;
        }
        
        .btn-lg {
            padding: 0.8rem 1.5rem !important;
        }
        
        .service-image-placeholder {
            height: 150px;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Add hover effects to service cards
    const serviceCards = document.querySelectorAll('.service-card-elegant');
    
    serviceCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = '';
        });
    });
    
    // Add animation to process steps on scroll
    const processSteps = document.querySelectorAll('.process-step');
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    processSteps.forEach(step => {
        step.style.opacity = '0';
        step.style.transform = 'translateY(20px)';
        step.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
        observer.observe(step);
    });
    
    // Price range item hover effect
    const priceRanges = document.querySelectorAll('.price-range-item');
    
    priceRanges.forEach(range => {
        range.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
        });
        
        range.addEventListener('mouseleave', function() {
            this.style.transform = '';
        });
    });
    
    // Handle service booking clicks
    const serviceButtons = document.querySelectorAll('a[href*="contact"]');
    serviceButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            if (this.href.includes('?service=')) {
                const url = new URL(this.href);
                const serviceParam = url.searchParams.get('service');
                
                if (serviceParam) {
                    sessionStorage.setItem('selectedService', serviceParam);
                }
            }
        });
    });
});
</script>
@endsection