{{-- resources/views/pages/about.blade.php --}}
@extends('layouts.app')

@section('title', 'About Kholeka | Master Braiding Artist')

@section('content')
<!-- ABOUT HERO -->
<section class="about-hero py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="hero-content">
                    <div class="badge bg-pink-soft text-pink fw-semibold px-3 py-2 rounded-pill mb-3 d-inline-block">
                        <i class="bi bi-star-fill me-1"></i> The Artist Behind the Artistry
                    </div>
                    
                    <h1 class="display-3 fw-bold mb-4">
                        Meet<br>
                        <span class="text-gradient">Kholeka</span>
                    </h1>
                    
                    <p class="lead mb-4">
                        Master braiding artist with {{ $aboutContent['experience'] }}+ years of transforming 
                        hair into wearable art. Passionate about creating beauty that empowers.
                    </p>
                    
                    <!-- Quick Stats -->
                    <div class="quick-stats d-flex gap-4 mb-4">
                        <div class="stat-item">
                            <div class="stat-number h2 fw-bold text-pink">{{ $aboutContent['experience'] }}+</div>
                            <div class="stat-label small">Years Experience</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number h2 fw-bold text-pink">5K+</div>
                            <div class="stat-label small">Clients Served</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number h2 fw-bold text-pink">100%</div>
                            <div class="stat-label small">Satisfaction</div>
                        </div>
                    </div>
                    
                    <!-- Social Proof -->
                    <div class="social-proof d-flex align-items-center">
                        <div class="client-avatars d-flex me-3">
                            @for($i = 0; $i < 3; $i++)
                            <div class="avatar-sm rounded-circle border border-white bg-pink-soft d-flex align-items-center justify-content-center"
                                 style="margin-left: {{ $i > 0 ? '-10px' : '0' }}; z-index: {{ 3 - $i }};">
                                <i class="bi bi-person-fill text-pink small"></i>
                            </div>
                            @endfor
                        </div>
                        <div class="social-text small text-muted">
                            Trusted by thousands of clients across South Africa
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="artist-portrait position-relative">
                    <!-- Decorative Elements -->
                    <div class="about-dot dot-1"></div>
                    <div class="about-dot dot-2"></div>
                    <div class="about-dot dot-3"></div>
                    
                    <!-- Main Portrait Container -->
                    <div class="portrait-container">
                        <div class="portrait-frame">
                            <div class="portrait-inner">
                                <img src="{{ asset('images/about/kholeka-portrait.jpg') }}" 
                                     alt="Kholeka - Master Braiding Artist"
                                     class="portrait-img rounded-4 w-100">
                            </div>
                            
                            <!-- Floating Badges -->
                            <div class="floating-badge badge-1">
                                <div class="badge-content d-flex align-items-center">
                                    <div class="icon-circle bg-pink text-white me-2">
                                        <i class="bi bi-award-fill"></i>
                                    </div>
                                    <div>
                                        <div class="small fw-semibold">Certified</div>
                                        <div class="x-small">Master Artist</div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="floating-badge badge-2">
                                <div class="badge-content d-flex align-items-center">
                                    <div class="icon-circle bg-pink-soft text-pink me-2">
                                        <i class="bi bi-heart-fill"></i>
                                    </div>
                                    <div>
                                        <div class="small fw-semibold">Passionate</div>
                                        <div class="x-small">About Artistry</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PHILOSOPHY SECTION -->
<section class="philosophy-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2 mb-5 mb-lg-0">
                <div class="philosophy-image">
                    <div class="image-wrapper rounded-4 overflow-hidden shadow-lg">
                        <img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                             alt="Braiding Philosophy"
                             class="img-fluid w-100"
                             style="height: 400px; object-fit: cover;">
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 order-lg-1">
                <div class="philosophy-content">
                    <div class="section-icon mb-4">
                        <div class="icon-wrapper bg-pink-soft rounded-circle p-3 d-inline-block">
                            <i class="bi bi-lightbulb fs-2 text-pink"></i>
                        </div>
                    </div>
                    
                    <h2 class="display-5 fw-bold mb-4">
                        My<br>
                        <span class="text-gradient">Philosophy</span>
                    </h2>
                    
                    <p class="lead mb-4">
                        {{ $aboutContent['bio'] }}
                    </p>
                    
                    <blockquote class="blockquote mb-4 p-4 bg-pink-soft rounded-4 border-start border-4 border-pink">
                        <i class="bi bi-quote fs-1 text-pink opacity-25 d-block mb-3"></i>
                        <p class="mb-0 fst-italic">
                            "Hair is not just hair - it's a canvas for self-expression, a crown of confidence, 
                            and a testament to the beauty of cultural heritage."
                        </p>
                        <footer class="blockquote-footer mt-3">Kholeka</footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- VALUES SECTION -->
<section class="values-section py-5 bg-pink-soft">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold mb-3">Core Values & Principles</h2>
            <p class="lead text-muted max-w-2xl mx-auto">
                Guiding principles that shape every braid, every client interaction, and every artistic creation.
            </p>
        </div>
        
        <div class="row g-4">
            @foreach($aboutContent['values'] as $value)
            <div class="col-md-6 col-lg-4">
                <div class="value-card bg-white rounded-4 p-4 h-100">
                    <div class="value-icon bg-pink-soft rounded-circle p-3 d-inline-block mb-3">
                        <i class="bi bi-check-circle fs-3 text-pink"></i>
                    </div>
                    <h4 class="h5 fw-bold mb-3">{{ $value }}</h4>
                    <p class="text-muted mb-0 small">
                        @php
                            // Matching descriptions for each value
                            $valueDescriptions = [
                                'Precision in Every Strand' => 'Meticulous attention to detail ensures each braid is perfectly aligned and secured for longevity.',
                                'Client-Centered Approach' => 'Every style is tailored to the client\'s unique features, personality, and lifestyle.',
                                'Artistic Excellence' => 'Combining traditional techniques with contemporary creativity for truly unique designs.',
                                'Quality Materials' => 'Using only premium, ethically-sourced hair extensions and professional-grade products.',
                                'Continuous Learning' => 'Constantly evolving skills through workshops, certifications, and artistic exploration.',
                                'Empowerment Through Beauty' => 'Believing that beautiful hair builds confidence and empowers women to shine.'
                            ];
                        @endphp
                        {{ $valueDescriptions[$value] ?? 'A core principle that guides every aspect of my work and client interactions.' }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- JOURNEY TIMELINE -->
<section class="journey-section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold mb-3">My Journey</h2>
            <p class="lead text-muted max-w-2xl mx-auto">
                From first braid to master artist - the evolution of a passion into a profession.
            </p>
        </div>
        
        <div class="timeline">
            @php
                $timelineEvents = [
                    [
                        'year' => '2013',
                        'title' => 'The Beginning',
                        'description' => 'Started braiding for friends and family, discovering a natural talent for intricate patterns.'
                    ],
                    [
                        'year' => '2015',
                        'title' => 'Professional Training',
                        'description' => 'Completed advanced braiding certification and began offering professional services.'
                    ],
                    [
                        'year' => '2018',
                        'title' => 'Studio Launch',
                        'description' => 'Opened first dedicated braiding studio, focusing on luxury client experiences.'
                    ],
                    [
                        'year' => '2020',
                        'title' => 'Master Artist Recognition',
                        'description' => 'Awarded Master Braiding Artist certification for excellence in technique and innovation.'
                    ],
                    [
                        'year' => '2023',
                        'title' => 'Current Chapter',
                        'description' => 'Mentoring aspiring artists while continuing to push creative boundaries in braiding.'
                    ]
                ];
            @endphp
            
            @foreach($timelineEvents as $event)
            <div class="timeline-item">
                <div class="timeline-marker">
                    <div class="marker-dot bg-pink"></div>
                    <div class="marker-line"></div>
                </div>
                <div class="timeline-content">
                    <div class="timeline-year h4 fw-bold text-pink mb-2">{{ $event['year'] }}</div>
                    <h4 class="h5 fw-bold mb-2">{{ $event['title'] }}</h4>
                    <p class="text-muted mb-0">{{ $event['description'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- WHY CHOOSE KHOLKEKA -->
<section class="why-choose-section py-5 bg-pink-soft">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-5 mb-lg-0">
                <div class="why-choose-image">
                    <div class="image-stack position-relative">
                        <div class="stack-image main-image rounded-4 overflow-hidden shadow-lg">
                            <img src="https://images.unsplash.com/photo-1580618672591-eb180b1a973f?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                                 alt="Why Choose Kholeka"
                                 class="img-fluid w-100"
                                 style="height: 300px; object-fit: cover;">
                        </div>
                        <div class="stack-image secondary-image rounded-4 overflow-hidden shadow position-absolute"
                             style="top: -20px; right: -20px; width: 200px; height: 200px;">
                            <img src="https://images.unsplash.com/photo-1560066984-138dadb4c035?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80" 
                                 alt="Detail Work"
                                 class="img-fluid w-100 h-100">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-7">
                <div class="why-choose-content">
                    <h2 class="display-5 fw-bold mb-4">
                        Why Clients<br>
                        <span class="text-gradient">Choose Kholeka</span>
                    </h2>
                    
                    <div class="reasons">
                        @php
                            $reasons = [
                                [
                                    'icon' => 'bi-scissors',
                                    'title' => 'Masterful Technique',
                                    'description' => 'Precision braiding that ensures longevity and comfort.'
                                ],
                                [
                                    'icon' => 'bi-gem',
                                    'title' => 'Premium Materials',
                                    'description' => 'Only the highest quality, ethically-sourced hair extensions.'
                                ],
                                [
                                    'icon' => 'bi-clock-history',
                                    'title' => 'Timeless Styles',
                                    'description' => 'Classic techniques combined with modern, wearable artistry.'
                                ],
                                [
                                    'icon' => 'bi-people',
                                    'title' => 'Personalized Service',
                                    'description' => 'Each client receives undivided attention and customized care.'
                                ]
                            ];
                        @endphp
                        
                        @foreach($reasons as $reason)
                        <div class="reason-item d-flex align-items-start mb-4">
                            <div class="reason-icon bg-white text-pink rounded-circle p-2 me-3">
                                <i class="bi {{ $reason['icon'] }} fs-5"></i>
                            </div>
                            <div>
                                <h4 class="h6 fw-bold mb-1">{{ $reason['title'] }}</h4>
                                <p class="small text-muted mb-0">{{ $reason['description'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FINAL CTA -->
<section class="about-cta py-5">
    <div class="container">
        <div class="cta-card bg-gradient-pink rounded-4 p-5 text-center text-white position-relative overflow-hidden">
            <!-- Decorative elements -->
            <div class="cta-dot dot-1"></div>
            <div class="cta-dot dot-2"></div>
            
            <div class="position-relative" style="z-index: 2;">
                <h2 class="display-5 fw-bold mb-3">Ready to Experience<br>Masterful Braiding?</h2>
                <p class="lead mb-4 opacity-90">
                    Book a consultation and let's create something beautiful together.
                </p>
                
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                    <a href="{{ route('contact') }}" class="btn btn-light btn-lg px-4 py-3 text-pink fw-bold">
                        <i class="bi bi-calendar-check fs-5 me-2"></i>
                        Book Consultation
                    </a>
                    <a href="{{ route('portfolio') }}" class="btn btn-outline-light btn-lg px-4 py-3">
                        <i class="bi bi-images fs-5 me-2"></i>
                        View Portfolio
                    </a>
                </div>
                
                <div class="mt-4 pt-2">
                    <p class="small opacity-75">
                        <i class="bi bi-telephone me-1"></i>
                        Prefer to call? <a href="tel:+27821234567" class="text-white text-decoration-underline">+27 82 123 4567</a>
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
    
    .text-gradient {
        background: linear-gradient(90deg, var(--pink), var(--pink-dark));
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        display: inline-block;
    }
    
    /* Color Classes */
    .text-pink { color: var(--pink) !important; }
    .bg-pink { background-color: var(--pink) !important; }
    .bg-pink-soft { background-color: var(--pink-soft) !important; }
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
    
    /* About Hero */
    .about-hero {
        background: linear-gradient(135deg, #fef5f9 0%, #fcf9fa 100%);
        border-bottom: 1px solid rgba(212, 86, 135, 0.1);
    }
    
    .quick-stats {
        flex-wrap: wrap;
    }
    
    .stat-item {
        padding: 0.5rem 1rem;
        border-radius: 10px;
        background: rgba(212, 86, 135, 0.05);
        min-width: 80px;
        text-align: center;
    }
    
    .avatar-sm {
        width: 32px;
        height: 32px;
        font-size: 0.8rem;
    }
    
    /* Artist Portrait */
    .artist-portrait {
        padding: 20px;
    }
    
    .about-dot {
        position: absolute;
        border-radius: 50%;
        background: rgba(212, 86, 135, 0.05);
        z-index: 0;
    }
    
    .about-dot.dot-1 {
        width: 120px;
        height: 120px;
        top: 10px;
        right: 40px;
    }
    
    .about-dot.dot-2 {
        width: 80px;
        height: 80px;
        bottom: 30px;
        left: 20px;
        background: rgba(232, 117, 163, 0.05);
    }
    
    .about-dot.dot-3 {
        width: 60px;
        height: 60px;
        top: 40%;
        right: 10%;
        background: rgba(212, 86, 135, 0.08);
    }
    
    .portrait-frame {
        position: relative;
        z-index: 2;
        width: 100%;
        max-width: 400px;
        margin: 0 auto;
    }
    
    .portrait-inner {
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        border: 5px solid white;
    }
    
    .portrait-img {
        height: 400px;
        object-fit: cover;
    }
    
    .floating-badge {
        position: absolute;
        background: white;
        padding: 10px 12px;
        border-radius: 10px;
        border: 2px solid var(--pink);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        z-index: 3;
        animation: float 6s ease-in-out infinite;
    }
    
    .floating-badge.badge-1 {
        top: 20px;
        right: -20px;
        animation-delay: 0s;
    }
    
    .floating-badge.badge-2 {
        bottom: 40px;
        left: -20px;
        animation-delay: 1s;
    }
    
    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-8px); }
    }
    
    .icon-circle {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.9rem;
    }
    
    .x-small {
        font-size: 0.7rem;
    }
    
    /* Philosophy Section */
    .philosophy-section {
        background: white;
    }
    
    .section-icon {
        transition: transform 0.3s ease;
    }
    
    .section-icon:hover {
        transform: scale(1.1) rotate(5deg);
    }
    
    /* Values Section */
    .value-card {
        transition: all 0.3s ease;
        border: 1px solid rgba(212, 86, 135, 0.1);
    }
    
    .value-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(212, 86, 135, 0.15);
        border-color: rgba(212, 86, 135, 0.2);
    }
    
    /* Timeline */
    .timeline {
        position: relative;
        max-width: 800px;
        margin: 0 auto;
    }
    
    .timeline::before {
        content: '';
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        width: 2px;
        height: 100%;
        background: var(--pink-soft);
    }
    
    .timeline-item {
        position: relative;
        margin-bottom: 3rem;
        display: flex;
        align-items: flex-start;
    }
    
    .timeline-marker {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        width: 40px;
        height: 40px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    
    .marker-dot {
        width: 16px;
        height: 16px;
        border-radius: 50%;
        border: 3px solid white;
        box-shadow: 0 0 0 3px var(--pink);
        z-index: 2;
    }
    
    .marker-line {
        width: 2px;
        height: 100%;
        background: var(--pink);
        margin-top: 8px;
    }
    
    .timeline-content {
        width: 45%;
        padding: 1.5rem;
        background: white;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        border: 1px solid rgba(212, 86, 135, 0.1);
    }
    
    .timeline-item:nth-child(odd) .timeline-content {
        margin-right: auto;
        margin-left: calc(50% + 20px);
    }
    
    .timeline-item:nth-child(even) .timeline-content {
        margin-left: auto;
        margin-right: calc(50% + 20px);
        text-align: right;
    }
    
    /* Why Choose Section */
    .image-stack {
        height: 300px;
    }
    
    .stack-image {
        transition: all 0.3s ease;
    }
    
    .stack-image:hover {
        transform: translateY(-5px);
    }
    
    .reason-item {
        padding: 0.5rem;
        border-radius: 10px;
        transition: all 0.3s ease;
    }
    
    .reason-item:hover {
        background: rgba(255, 255, 255, 0.5);
        padding-left: 0.75rem;
    }
    
    /* CTA Section */
    .about-cta {
        background: #fef5f9;
    }
    
    .cta-dot {
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.1);
        z-index: 1;
    }
    
    .cta-dot.dot-1 {
        width: 150px;
        height: 150px;
        top: -50px;
        left: -50px;
    }
    
    .cta-dot.dot-2 {
        width: 100px;
        height: 100px;
        bottom: -30px;
        right: -30px;
        background: rgba(255, 255, 255, 0.15);
    }
    
    /* Responsive Design */
    @media (max-width: 1199px) {
        .display-3 {
            font-size: 2.5rem;
        }
        
        .display-5 {
            font-size: 2.2rem;
        }
        
        .portrait-img {
            height: 350px;
        }
    }
    
    @media (max-width: 991px) {
        .display-3 {
            font-size: 2.2rem;
        }
        
        .display-5 {
            font-size: 2rem;
        }
        
        .portrait-frame {
            max-width: 350px;
        }
        
        .portrait-img {
            height: 320px;
        }
        
        .timeline::before {
            left: 30px;
        }
        
        .timeline-marker {
            left: 30px;
        }
        
        .timeline-content {
            width: calc(100% - 80px);
            margin-left: 80px !important;
            text-align: left !important;
        }
    }
    
    @media (max-width: 768px) {
        .display-3 {
            font-size: 2rem;
        }
        
        .display-5 {
            font-size: 1.8rem;
        }
        
        .portrait-img {
            height: 280px;
        }
        
        .floating-badge {
            display: none;
        }
        
        .about-dot {
            display: none;
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
        
        .display-5 {
            font-size: 1.6rem;
        }
        
        .portrait-img {
            height: 250px;
        }
        
        .quick-stats {
            justify-content: center;
        }
        
        .stat-item {
            min-width: 70px;
            padding: 0.5rem;
        }
        
        .timeline-content {
            padding: 1rem;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Value cards animation
    const valueCards = document.querySelectorAll('.value-card');
    valueCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = '';
        });
    });
    
    // Reason items animation
    const reasonItems = document.querySelectorAll('.reason-item');
    reasonItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            this.style.transform = 'translateX(10px)';
        });
        
        item.addEventListener('mouseleave', function() {
            this.style.transform = '';
        });
    });
    
    // Stack images hover effect
    const stackImages = document.querySelectorAll('.stack-image');
    stackImages.forEach(img => {
        img.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
        });
        
        img.addEventListener('mouseleave', function() {
            this.style.transform = '';
        });
    });
    
    // Animate timeline items on scroll
    const timelineItems = document.querySelectorAll('.timeline-item');
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
    
    timelineItems.forEach(item => {
        item.style.opacity = '0';
        item.style.transform = 'translateY(30px)';
        item.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
        observer.observe(item);
    });
    
    // Add parallax effect to portrait on scroll
    const portraitFrame = document.querySelector('.portrait-frame');
    window.addEventListener('scroll', function() {
        if (window.innerWidth > 768 && portraitFrame) {
            const scrolled = window.pageYOffset;
            const rate = scrolled * -0.1;
            portraitFrame.style.transform = `translateY(${rate}px)`;
        }
    });
});
</script>
@endsection