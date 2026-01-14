{{-- resources/views/pages/portfolio.blade.php --}}
@extends('layouts.app')

@section('title', 'Portfolio | Luxury Braiding Artistry by Kholeka')

@section('content')
<!-- PORTFOLIO HERO -->
<div class="portfolio-hero py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-content">
                    <div class="badge bg-pink-soft text-pink fw-semibold px-3 py-2 rounded-pill mb-3 d-inline-block">
                        <i class="bi bi-images me-1"></i> Gallery of Excellence
                    </div>
                    
                    <h1 class="display-3 fw-bold mb-4">
                        Masterful Braiding<br>
                        <span class="text-gradient">Portfolio</span>
                    </h1>
                    
                    <p class="lead mb-4">
                        Browse through our collection of meticulously crafted braiding styles. 
                        Each piece represents hours of dedication, precision, and artistic vision.
                    </p>
                    
                    <!-- Stats -->
                    <div class="stats d-flex gap-4 mb-4">
                        <div class="stat">
                            <div class="h2 fw-bold text-pink mb-1">{{ count($portfolioItems) }}+</div>
                            <div class="small text-muted">Masterpieces</div>
                        </div>
                        <div class="stat">
                            <div class="h2 fw-bold text-pink mb-1">10+</div>
                            <div class="small text-muted">Braiding Styles</div>
                        </div>
                        <div class="stat">
                            <div class="h2 fw-bold text-pink mb-1">100%</div>
                            <div class="small text-muted">Client Satisfaction</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="hero-image position-relative">
                    <div class="image-grid">
                        @if($portfolioItems->count() > 0)
                            <div class="main-image rounded-4 overflow-hidden shadow-lg">
                                <img src="{{ asset('images/' . $portfolioItems[0]->image_path) }}" 
                                     alt="{{ $portfolioItems[0]->title }}" 
                                     class="img-fluid w-100" 
                                     style="height: 300px; object-fit: cover;">
                            </div>
                            @if($portfolioItems->count() > 1)
                            <div class="secondary-images d-flex gap-2 mt-3">
                                @foreach($portfolioItems->slice(1, 3) as $index => $item)
                                <div class="secondary-image rounded-3 overflow-hidden shadow-sm">
                                    <img src="{{ asset('images/' . $item->image_path) }}" 
                                         alt="{{ $item->title }}" 
                                         class="img-fluid" 
                                         style="height: 120px; width: 120px; object-fit: cover;">
                                </div>
                                @endforeach
                            </div>
                            @endif
                        @endif
                    </div>
                    
                    <!-- Decorative elements -->
                    <div class="portfolio-dot dot-1"></div>
                    <div class="portfolio-dot dot-2"></div>
                    <div class="portfolio-dot dot-3"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- PORTFOLIO FILTER -->
<section class="portfolio-filter py-4 bg-pink-soft">
    <div class="container">
        <div class="filter-wrapper">
            <h3 class="h5 fw-bold text-center mb-4">Browse by Style Category</h3>
            <div class="filter-buttons d-flex flex-wrap justify-content-center gap-2">
                <button class="filter-btn active" data-filter="all">
                    <i class="bi bi-grid me-2"></i> All Styles
                </button>
                
                @php
                    // Get unique categories from portfolio items
                    $uniqueCategories = $portfolioItems->pluck('category')->unique();
                @endphp
                
                @foreach($uniqueCategories as $category)
                <button class="filter-btn" data-filter="{{ $category }}">
                    <i class="bi bi-scissors me-2"></i>
                    {{ ucwords(str_replace('-', ' ', $category)) }}
                </button>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- PORTFOLIO GRID -->
<section class="portfolio-grid-section py-5">
    <div class="container">
        <div class="row g-4" id="portfolio-masonry">
            @forelse($portfolioItems as $item)
            <div class="col-md-6 col-lg-4 portfolio-item" data-category="{{ $item->category }}">
                <div class="portfolio-card">
                    <!-- Image Container -->
                    <div class="portfolio-image-container">
                        <img src="{{ asset('images/' . $item->image_path) }}" 
                             alt="{{ $item->title }}" 
                             class="portfolio-image img-fluid"
                             data-bs-toggle="modal" 
                             data-bs-target="#imageModal"
                             data-bs-image="{{ asset('images/' . $item->image_path) }}"
                             data-bs-title="{{ $item->title }}"
                             data-bs-description="{{ $item->description }}">
                        
                        <!-- Hover Overlay -->
                        <div class="portfolio-overlay">
                            <div class="overlay-content">
                                <div class="badge bg-white text-pink mb-2">
                                    {{ ucwords(str_replace('-', ' ', $item->category)) }}
                                </div>
                                <h4 class="overlay-title">{{ $item->title }}</h4>
                                @if($item->description)
                                <p class="overlay-description">{{ $item->description }}</p>
                                @endif
                                <button class="btn btn-sm btn-pink mt-2 view-btn">
                                    <i class="bi bi-zoom-in me-1"></i> View Details
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Card Footer -->
                    <div class="portfolio-card-footer p-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="mb-0 fw-semibold">{{ $item->title }}</h5>
                                <span class="small text-muted">
                                    {{ ucwords(str_replace('-', ' ', $item->category)) }}
                                </span>
                            </div>
                            <button class="btn btn-sm btn-outline-pink rounded-circle p-2"
                                    data-bs-toggle="modal" 
                                    data-bs-target="#imageModal"
                                    data-bs-image="{{ asset('images/' . $item->image_path) }}"
                                    data-bs-title="{{ $item->title }}"
                                    data-bs-description="{{ $item->description }}">
                                <i class="bi bi-arrows-fullscreen"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <!-- Empty State -->
            <div class="col-12">
                <div class="empty-state text-center py-5">
                    <div class="empty-icon mb-4">
                        <i class="bi bi-camera fs-1 text-pink"></i>
                    </div>
                    <h3 class="h4 fw-bold mb-3">Portfolio Coming Soon</h3>
                    <p class="text-muted mb-4">
                        Kholeka is currently updating her portfolio with stunning new images.<br>
                        Check back soon to see her latest masterpieces!
                    </p>
                    <a href="{{ route('services') }}" class="btn btn-outline-pink">
                        <i class="bi bi-scissors me-2"></i> Explore Services
                    </a>
                </div>
            </div>
            @endforelse
        </div>
        
        <!-- Show message if there are no portfolio items -->
        @if(count($portfolioItems) === 0)
        <div class="text-center mt-5">
            <p class="text-muted">
                <i class="bi bi-info-circle me-2"></i>
                No portfolio items available yet. Check back soon!
            </p>
        </div>
        @endif
    </div>
</section>

<!-- BEHIND THE SCENES -->
<section class="behind-scenes py-5 bg-pink-soft">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="section-image rounded-4 overflow-hidden shadow-lg">
                    <img src="https://images.unsplash.com/photo-1596703923338-48f1c07e4f2e?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                         alt="Behind the Scenes" 
                         class="img-fluid w-100" 
                         style="height: 400px; object-fit: cover;">
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="section-content">
                    <div class="badge bg-pink text-white px-3 py-2 rounded-pill mb-3 d-inline-block">
                        <i class="bi bi-star me-1"></i> The Process
                    </div>
                    
                    <h2 class="display-5 fw-bold mb-4">
                        Artistry in<br>
                        <span class="text-gradient">Every Strand</span>
                    </h2>
                    
                    <p class="lead mb-4">
                        Each braid is meticulously crafted with precision tools, premium hair extensions, 
                        and hours of dedicated artistry. The result is not just a hairstyle, but wearable art.
                    </p>
                    
                    <div class="process-points">
                        <div class="process-point d-flex align-items-start mb-3">
                            <div class="point-icon bg-white text-pink rounded-circle p-2 me-3">
                                <i class="bi bi-brush"></i>
                            </div>
                            <div>
                                <h4 class="h6 fw-bold mb-1">Creative Vision</h4>
                                <p class="small text-muted mb-0">Custom designs tailored to each client's unique features</p>
                            </div>
                        </div>
                        
                        <div class="process-point d-flex align-items-start mb-3">
                            <div class="point-icon bg-white text-pink rounded-circle p-2 me-3">
                                <i class="bi bi-rulers"></i>
                            </div>
                            <div>
                                <h4 class="h6 fw-bold mb-1">Precision Technique</h4>
                                <p class="small text-muted mb-0">Meticulous attention to detail and symmetry</p>
                            </div>
                        </div>
                        
                        <div class="process-point d-flex align-items-start">
                            <div class="point-icon bg-white text-pink rounded-circle p-2 me-3">
                                <i class="bi bi-gem"></i>
                            </div>
                            <div>
                                <h4 class="h6 fw-bold mb-1">Premium Materials</h4>
                                <p class="small text-muted mb-0">Only the highest quality hair extensions and products</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="portfolio-cta py-5">
    <div class="container">
        <div class="cta-card bg-gradient-pink rounded-4 p-5 text-center text-white position-relative overflow-hidden">
            <!-- Decorative elements -->
            <div class="cta-decoration decoration-1"></div>
            <div class="cta-decoration decoration-2"></div>
            
            <div class="position-relative" style="z-index: 2;">
                <h2 class="display-5 fw-bold mb-3">Inspired by What You See?</h2>
                <p class="lead mb-4 opacity-90">
                    Let's create your own masterpiece. Book a consultation today.
                </p>
                
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                    <a href="{{ route('contact') }}" class="btn btn-light btn-lg px-4 py-3 text-pink fw-bold">
                        <i class="bi bi-calendar-check fs-5 me-2"></i>
                        Book Your Session
                    </a>
                    <a href="{{ route('services.index') }}" class="btn btn-outline-light btn-lg px-4 py-3">
                        <i class="bi bi-scissors fs-5 me-2"></i>
                        Explore Services
                    </a>
                </div>
                
                <div class="mt-4 pt-2">
                    <p class="small opacity-75">
                        <i class="bi bi-chat-quote me-1"></i>
                        "Your hair is your crown - wear it with confidence"
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- IMAGE MODAL -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div id="modalImageContainer" class="text-center">
                    <img src="" alt="" class="img-fluid rounded-3" id="modalImage" 
                         style="max-height: 500px; object-fit: contain;">
                </div>
                <div class="mt-4">
                    <h4 id="modalTitle" class="fw-bold mb-2"></h4>
                    <p id="modalDescription" class="text-muted mb-0"></p>
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-outline-pink" data-bs-dismiss="modal">
                    <i class="bi bi-x-circle me-2"></i> Close
                </button>
                <button type="button" class="btn btn-pink" id="shareImageBtn">
                    <i class="bi bi-share me-2"></i> Share
                </button>
            </div>
        </div>
    </div>
</div>

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
    .text-gradient {
        background: linear-gradient(90deg, var(--pink), var(--pink-dark));
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        display: inline-block;
    }
    
    .bg-pink-soft { background-color: var(--pink-soft) !important; }
    .text-pink { color: var(--pink) !important; }
    .bg-pink { background-color: var(--pink) !important; }
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
    
    /* Portfolio Hero */
    .portfolio-hero {
        background: linear-gradient(135deg, #fef5f9 0%, #fcf9fa 100%);
        border-bottom: 1px solid rgba(212, 86, 135, 0.1);
    }
    
    .stats {
        flex-wrap: wrap;
    }
    
    .stat {
        text-align: center;
        padding: 0.5rem 1rem;
        border-radius: 10px;
        background: rgba(212, 86, 135, 0.05);
        min-width: 100px;
    }
    
    .portfolio-dot {
        position: absolute;
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background: rgba(212, 86, 135, 0.05);
        z-index: 0;
    }
    
    .portfolio-dot.dot-1 {
        top: 20px;
        right: 50px;
        width: 60px;
        height: 60px;
    }
    
    .portfolio-dot.dot-2 {
        bottom: 40px;
        left: 30px;
        width: 40px;
        height: 40px;
        background: rgba(232, 117, 163, 0.05);
    }
    
    .portfolio-dot.dot-3 {
        top: 60%;
        right: 30%;
        width: 30px;
        height: 30px;
        background: rgba(212, 86, 135, 0.08);
    }
    
    /* Filter Section */
    .filter-btn {
        padding: 0.75rem 1.5rem;
        border: 2px solid transparent;
        background: white;
        color: var(--pink);
        border-radius: 50px;
        font-weight: 500;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
    }
    
    .filter-btn:hover, .filter-btn.active {
        background: var(--pink);
        color: white;
        border-color: var(--pink);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(212, 86, 135, 0.2);
    }
    
    /* Portfolio Cards */
    .portfolio-card {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
        height: 100%;
        border: 1px solid rgba(212, 86, 135, 0.1);
    }
    
    .portfolio-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(212, 86, 135, 0.15);
        border-color: rgba(212, 86, 135, 0.2);
    }
    
    .portfolio-image-container {
        position: relative;
        overflow: hidden;
        height: 300px;
    }
    
    .portfolio-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
        cursor: pointer;
    }
    
    .portfolio-card:hover .portfolio-image {
        transform: scale(1.05);
    }
    
    .portfolio-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.2));
        opacity: 0;
        transition: opacity 0.3s ease;
        display: flex;
        align-items: flex-end;
        padding: 1.5rem;
    }
    
    .portfolio-card:hover .portfolio-overlay {
        opacity: 1;
    }
    
    .overlay-content {
        transform: translateY(20px);
        transition: transform 0.3s ease;
        color: white;
        width: 100%;
    }
    
    .portfolio-card:hover .overlay-content {
        transform: translateY(0);
    }
    
    .overlay-title {
        font-size: 1.25rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
    }
    
    .overlay-description {
        font-size: 0.9rem;
        opacity: 0.9;
        margin-bottom: 1rem;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    .portfolio-card-footer {
        background: white;
        border-top: 1px solid rgba(212, 86, 135, 0.1);
    }
    
    /* Empty State */
    .empty-state {
        background: rgba(212, 86, 135, 0.05);
        border-radius: 15px;
        padding: 3rem !important;
    }
    
    .empty-icon {
        font-size: 4rem;
    }
    
    /* Behind the Scenes */
    .behind-scenes {
        border-top: 1px solid rgba(212, 86, 135, 0.1);
        border-bottom: 1px solid rgba(212, 86, 135, 0.1);
    }
    
    .process-point {
        padding: 0.5rem;
        border-radius: 10px;
        transition: all 0.3s ease;
    }
    
    .process-point:hover {
        background: rgba(255, 255, 255, 0.5);
        padding-left: 0.75rem;
    }
    
    /* CTA Section */
    .portfolio-cta {
        background: #fef5f9;
    }
    
    .cta-decoration {
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.1);
        z-index: 1;
    }
    
    .cta-decoration.decoration-1 {
        width: 120px;
        height: 120px;
        top: -40px;
        left: -40px;
    }
    
    .cta-decoration.decoration-2 {
        width: 80px;
        height: 80px;
        bottom: -20px;
        right: 10%;
        background: rgba(255, 255, 255, 0.15);
    }
    
    /* Modal */
    .modal-content {
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
    }
    
    /* Responsive Design */
    @media (max-width: 1199px) {
        .display-3 {
            font-size: 2.5rem;
        }
        
        .display-5 {
            font-size: 2.2rem;
        }
        
        .portfolio-image-container {
            height: 250px;
        }
    }
    
    @media (max-width: 991px) {
        .display-3 {
            font-size: 2.2rem;
        }
        
        .filter-buttons {
            gap: 0.5rem;
        }
        
        .filter-btn {
            padding: 0.5rem 1rem;
            font-size: 0.9rem;
        }
        
        .portfolio-image-container {
            height: 220px;
        }
    }
    
    @media (max-width: 768px) {
        .display-3 {
            font-size: 2rem;
        }
        
        .hero-image {
            margin-top: 2rem;
        }
        
        .filter-buttons {
            flex-direction: column;
            align-items: center;
        }
        
        .filter-btn {
            width: 100%;
            max-width: 250px;
            justify-content: center;
        }
        
        .portfolio-image-container {
            height: 200px;
        }
        
        .btn-lg {
            padding: 0.8rem 1.5rem !important;
            font-size: 1rem !important;
        }
    }
    
    @media (max-width: 576px) {
        .display-3 {
            font-size: 1.8rem;
        }
        
        .stats {
            gap: 1rem;
            justify-content: center;
        }
        
        .stat {
            min-width: 80px;
            padding: 0.5rem;
        }
        
        .portfolio-image-container {
            height: 180px;
        }
        
        .modal-dialog {
            margin: 0.5rem;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Portfolio Filter Functionality
    const filterButtons = document.querySelectorAll('.filter-btn');
    const portfolioItems = document.querySelectorAll('.portfolio-item');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            
            // Add active class to clicked button
            this.classList.add('active');
            
            const filter = this.getAttribute('data-filter');
            
            // Filter portfolio items
            portfolioItems.forEach(item => {
                if (filter === 'all') {
                    item.style.display = 'block';
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'scale(1)';
                    }, 50);
                } else {
                    const category = item.getAttribute('data-category');
                    if (category === filter) {
                        item.style.display = 'block';
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'scale(1)';
                        }, 50);
                    } else {
                        item.style.opacity = '0';
                        item.style.transform = 'scale(0.8)';
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 300);
                    }
                }
            });
        });
    });
    
    // Image Modal Functionality
    const imageModal = new bootstrap.Modal(document.getElementById('imageModal'));
    const modalImage = document.getElementById('modalImage');
    const modalTitle = document.getElementById('modalTitle');
    const modalDescription = document.getElementById('modalDescription');
    
    document.querySelectorAll('.portfolio-image, .btn-outline-pink.rounded-circle').forEach(element => {
        element.addEventListener('click', function() {
            const imageSrc = this.getAttribute('data-bs-image') || 
                            this.closest('.portfolio-item').querySelector('img').src;
            const title = this.getAttribute('data-bs-title') || 
                         this.closest('.portfolio-item').querySelector('h5').textContent;
            const description = this.getAttribute('data-bs-description') || 
                              this.closest('.portfolio-item').querySelector('.text-muted')?.textContent || '';
            
            modalImage.src = imageSrc;
            modalTitle.textContent = title;
            modalDescription.textContent = description;
            
            imageModal.show();
        });
    });
    
    // Share Button
    document.getElementById('shareImageBtn').addEventListener('click', function() {
        if (navigator.share) {
            navigator.share({
                title: modalTitle.textContent,
                text: 'Check out this beautiful braiding work from Braids by Kholeka!',
                url: window.location.href,
            })
            .catch(console.error);
        } else {
            // Fallback: Copy to clipboard
            navigator.clipboard.writeText(window.location.href)
                .then(() => {
                    alert('Link copied to clipboard!');
                })
                .catch(console.error);
        }
    });
    
    // Add hover effect to process points
    const processPoints = document.querySelectorAll('.process-point');
    processPoints.forEach(point => {
        point.addEventListener('mouseenter', function() {
            this.style.transform = 'translateX(10px)';
        });
        
        point.addEventListener('mouseleave', function() {
            this.style.transform = '';
        });
    });
    
    // Smooth animations for portfolio items
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
    
    portfolioItems.forEach(item => {
        item.style.opacity = '0';
        item.style.transform = 'translateY(30px)';
        item.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
        observer.observe(item);
    });
});
</script>
@endsection