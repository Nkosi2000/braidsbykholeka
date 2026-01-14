@extends('layouts.app')

@section('title', 'Braids by Kholeka | Luxury Hair Artistry')

@section('content')
<!-- HERO SECTION -->
<section class="hero-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Text Content -->
            <div class="col-lg-7 col-md-6 mb-5 mb-md-0">
                <div class="hero-content">
                    <div class="badge bg-pink-soft text-pink fw-semibold px-3 py-2 rounded-pill mb-3 d-inline-block">
                        <i class="bi bi-star-fill me-1"></i> Luxurious Hair Artistry
                    </div>
                    
                    <h1 class="display-4 fw-bold mb-4">
                        Where Hair Becomes<br>
                        <span class="text-gradient">Wearable Art</span>
                    </h1>
                    
                    <p class="lead mb-4">
                        Exclusive luxury braiding by Kholeka. Masterful artistry in knotless braids, 
                        box braids, and bespoke protective styles for the discerning woman.
                    </p>
                    
                    <!-- Stats in a stylish row -->
                    <div class="stats-row row g-4 mb-5">
                        <div class="col-4">
                            <div class="stat-card text-center p-3 rounded-4 bg-white shadow-sm">
                                <div class="h2 fw-bold text-pink mb-1">10+</div>
                                <div class="small text-muted">Years Mastery</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="stat-card text-center p-3 rounded-4 bg-white shadow-sm">
                                <div class="h2 fw-bold text-pink mb-1">5K+</div>
                                <div class="small text-muted">Clients Transformed</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="stat-card text-center p-3 rounded-4 bg-white shadow-sm">
                                <div class="h2 fw-bold text-pink mb-1">100%</div>
                                <div class="small text-muted">Satisfaction</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- CTA Buttons -->
                    <div class="d-flex flex-wrap gap-3">
                        <a href="{{ route('contact') }}" class="btn btn-pink btn-lg px-4 py-3 d-flex align-items-center">
                            <i class="bi bi-calendar-check fs-5 me-2"></i>
                            <span>Book Appointment</span>
                        </a>
                        <a href="{{ route('portfolio') }}" class="btn btn-outline-pink btn-lg px-4 py-3 d-flex align-items-center">
                            <i class="bi bi-images fs-5 me-2"></i>
                            <span>View Portfolio</span>
                        </a>
                    </div>
                    
                    <!-- Trust indicators -->
                    <div class="mt-4 pt-3 d-flex align-items-center">
                        <div class="d-flex me-3">
                            <div class="avatar-sm rounded-circle bg-pink text-white d-flex align-items-center justify-content-center me-1">
                                <i class="bi bi-check-lg"></i>
                            </div>
                            <div class="avatar-sm rounded-circle bg-pink text-white d-flex align-items-center justify-content-center me-1">
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <div class="avatar-sm rounded-circle bg-pink text-white d-flex align-items-center justify-content-center">
                                <i class="bi bi-heart-fill"></i>
                            </div>
                        </div>
                        <div class="text-muted small">
                            Trusted by 5,000+ clients across South Africa
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Video Section - Styled -->
            <div class="col-lg-5 col-md-6">
                <div class="video-container-wrapper">
                    <!-- Decorative elements around video -->
                    <div class="decoration-circle circle-1"></div>
                    <div class="decoration-circle circle-2"></div>
                    
                    <!-- EXTREMELY TINY TINY DOTS (Added back) -->
                    <div class="tiny-dot dot-1"></div>
                    <div class="tiny-dot dot-2"></div>
                    <div class="tiny-dot dot-3"></div>
                    <div class="tiny-dot dot-4"></div>
                    <div class="tiny-dot dot-5"></div>
                    <div class="tiny-dot dot-6"></div>
                    <div class="tiny-dot dot-7"></div>
                    <div class="tiny-dot dot-8"></div>
                    
                    <!-- Main video container -->
                    <div class="video-main-container">
                        <div class="video-frame">
                            <!-- Curved border container -->
                            <div class="curved-border-container">
                                <!-- Pink curved border with gradient -->
                                <div class="curved-border curved-border-1"></div>
                                <div class="curved-border curved-border-2"></div>
                                <div class="curved-border curved-border-3"></div>
                                <div class="curved-border curved-border-4"></div>
                                
                                <!-- Main video content -->
                                <div class="video-inner">
                                    <video autoplay muted loop playsinline 
                                           class="hero-video"
                                           poster="{{ asset('images/homepg/video/poster.jpg') }}">
                                        <source src="{{ asset('images/homepg/video/BraidsByKholekaVideo2.mp4') }}" type="video/mp4">
                                    </video>
                                    
                                    <!-- Play button overlay -->
                                    <div class="video-overlay d-flex align-items-center justify-content-center">
                                        <button class="play-btn btn btn-pink rounded-circle p-3">
                                            <i class="bi bi-play-fill fs-4"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Small floating cards -->
                        <div class="floating-card card-1 shadow">
                            <div class="d-flex align-items-center">
                                <div class="icon-circle bg-pink text-white me-2">
                                    <i class="bi scissor-icon"></i>
                                </div>
                                <div>
                                    <div class="small fw-semibold">Precision</div>
                                    <div class="x-small text-muted">Every Strand</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="floating-card card-2 shadow">
                            <div class="d-flex align-items-center">
                                <div class="icon-circle bg-pink-soft text-pink me-2">
                                    <i class="bi flower-icon"></i>
                                </div>
                                <div>
                                    <div class="small fw-semibold">Artistry</div>
                                    <div class="x-small text-muted">Handcrafted</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Color Variables - Updated to #d45687 as main pink */
    :root {
        --pink: #d45687;
        --pink-dark: #b03c6e;
        --pink-light: #e875a3;
        --pink-soft: #fce8f1;
        --pink-glow: rgba(212, 86, 135, 0.4);
    }
    
    /* Base Styles */
    .hero-section {
        background: linear-gradient(135deg, #fef5f9 0%, #fcf9fa 100%);
        position: relative;
        overflow: hidden;
        min-height: 85vh;
        display: flex;
        align-items: center;
    }
    
    /* Text Gradients */
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
    .btn-pink { 
        background-color: var(--pink) !important;
        border-color: var(--pink) !important;
        color: white !important;
    }
    .btn-pink:hover { 
        background-color: var(--pink-dark) !important;
        border-color: var(--pink-dark) !important;
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(212, 86, 135, 0.2);
    }
    .btn-outline-pink { 
        border-color: var(--pink) !important;
        color: var(--pink) !important;
    }
    .btn-outline-pink:hover { 
        background-color: var(--pink) !important;
        color: white !important;
        transform: translateY(-2px);
    }
    
    /* Stats Cards */
    .stat-card {
        transition: all 0.3s ease;
        border: 1px solid rgba(212, 86, 135, 0.1);
    }
    .stat-card:hover {
        transform: translateY(-5px);
        border-color: rgba(212, 86, 135, 0.2);
        box-shadow: 0 15px 30px rgba(212, 86, 135, 0.1) !important;
    }
    
    /* Avatar */
    .avatar-sm {
        width: 28px;
        height: 28px;
        font-size: 0.8rem;
    }
    
    /* VIDEO SECTION STYLES */
    .video-container-wrapper {
        position: relative;
        padding: 30px;
    }
    
    /* Decorative elements */
    .decoration-circle {
        position: absolute;
        border-radius: 50%;
        background: rgba(212, 86, 135, 0.05);
        z-index: 0;
    }
    .circle-1 {
        width: 140px;
        height: 140px;
        top: 10px;
        right: 30px;
    }
    .circle-2 {
        width: 100px;
        height: 100px;
        bottom: 30px;
        left: 10px;
        background: rgba(232, 117, 163, 0.05);
    }
    
    /* EXTREMELY TINY TINY DOTS (Added back) */
    .tiny-dot {
        position: absolute;
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: var(--pink-light);
        z-index: 1;
        animation: tiny-dot-float 15s ease-in-out infinite;
    }
    
    /* Different positions for the tiny dots */
    .dot-1 {
        top: 25%;
        left: 15%;
        animation-delay: 0s;
    }
    
    .dot-2 {
        top: 15%;
        right: 20%;
        animation-delay: 2s;
    }
    
    .dot-3 {
        top: 40%;
        left: 10%;
        animation-delay: 4s;
    }
    
    .dot-4 {
        top: 60%;
        right: 15%;
        animation-delay: 6s;
    }
    
    .dot-5 {
        bottom: 30%;
        left: 20%;
        animation-delay: 8s;
    }
    
    .dot-6 {
        bottom: 20%;
        right: 25%;
        animation-delay: 10s;
    }
    
    .dot-7 {
        top: 70%;
        left: 25%;
        animation-delay: 12s;
    }
    
    .dot-8 {
        bottom: 10%;
        right: 10%;
        animation-delay: 14s;
    }
    
    @keyframes tiny-dot-float {
        0%, 100% { 
            transform: translateY(0) scale(1);
            opacity: 0.4;
        }
        33% { 
            transform: translateY(-10px) scale(1.2);
            opacity: 0.8;
        }
        66% { 
            transform: translateY(10px) scale(0.8);
            opacity: 0.3;
        }
    }
    
    /* Main video container */
    .video-main-container {
        position: relative;
        z-index: 2;
    }
    
    .video-frame {
        width: 280px;
        margin: 0 auto;
        position: relative;
    }
    
    /* Curved border container */
    .curved-border-container {
        position: relative;
        padding: 15px;
        border-radius: 35px;
        background: linear-gradient(135deg, 
            rgba(212, 86, 135, 0.1) 0%, 
            rgba(232, 117, 163, 0.1) 50%, 
            rgba(212, 86, 135, 0.1) 100%);
    }
    
    /* Curved border elements */
    .curved-border {
        position: absolute;
        border: 3px solid;
        border-radius: 35px;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        pointer-events: none;
        opacity: 0.8;
    }
    
    .curved-border-1 {
        border-color: var(--pink);
        transform: scale(1);
        animation: border-pulse-1 3s ease-in-out infinite;
    }
    
    .curved-border-2 {
        border-color: var(--pink-light);
        transform: scale(0.95);
        animation: border-pulse-2 3s ease-in-out infinite;
        animation-delay: 0.5s;
    }
    
    .curved-border-3 {
        border-color: var(--pink);
        transform: scale(0.9);
        animation: border-pulse-3 3s ease-in-out infinite;
        animation-delay: 1s;
    }
    
    .curved-border-4 {
        border-color: var(--pink-soft);
        transform: scale(0.85);
        animation: border-pulse-4 3s ease-in-out infinite;
        animation-delay: 1.5s;
    }
    
    @keyframes border-pulse-1 {
        0%, 100% { opacity: 0.8; }
        50% { opacity: 0.4; }
    }
    
    @keyframes border-pulse-2 {
        0%, 100% { opacity: 0.7; }
        50% { opacity: 0.3; }
    }
    
    @keyframes border-pulse-3 {
        0%, 100% { opacity: 0.6; }
        50% { opacity: 0.2; }
    }
    
    @keyframes border-pulse-4 {
        0%, 100% { opacity: 0.5; }
        50% { opacity: 0.1; }
    }
    
    .curved-border-container:hover .curved-border {
        animation-play-state: paused;
        opacity: 0.9;
        box-shadow: 0 0 30px var(--pink-glow);
    }
    
    /* Video inner content */
    .video-inner {
        position: relative;
        border-radius: 25px;
        overflow: hidden;
        transform: perspective(1000px) rotateY(-5deg);
        transition: all 0.5s ease;
        box-shadow: 
            0 20px 60px rgba(212, 86, 135, 0.15),
            0 0 0 1px rgba(255, 255, 255, 0.8);
    }
    
    .curved-border-container:hover .video-inner {
        transform: perspective(1000px) rotateY(0deg) scale(1.02);
        box-shadow: 
            0 30px 80px rgba(212, 86, 135, 0.25),
            0 0 0 1px rgba(255, 255, 255, 0.9);
    }
    
    .hero-video {
        width: 100%;
        height: 500px;
        object-fit: cover;
        display: block;
    }
    
    /* Video overlay & play button */
    .video-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.3);
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: 2;
    }
    
    .video-inner:hover .video-overlay {
        opacity: 1;
    }
    
    .play-btn {
        transition: all 0.3s ease;
        width: 70px;
        height: 70px;
        font-size: 1.5rem !important;
        z-index: 3;
        border: 2px solid white;
    }
    
    .play-btn:hover {
        transform: scale(1.1);
        box-shadow: 0 0 20px rgba(255, 255, 255, 0.5);
    }
    
    /* Floating cards */
    .floating-card {
        position: absolute;
        background: white;
        padding: 12px 14px;
        border-radius: 12px;
        border: 2px solid var(--pink);
        z-index: 3;
        animation: float 6s ease-in-out infinite;
        backdrop-filter: blur(5px);
    }
    
    .card-1 {
        top: 30px;
        left: -25px;
        animation-delay: 0s;
    }
    
    .card-2 {
        bottom: 40px;
        right: -25px;
        animation-delay: 1s;
    }
    
    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }
    
    .icon-circle {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1rem;
    }
    
    .x-small {
        font-size: 0.75rem;
    }
    
    /* Icons (using Bootstrap icons with pseudo-elements) */
    .scissor-icon::before {
        content: "✂️";
        font-size: 1rem;
    }
    
    .flower-icon::before {
        content: "🌸";
        font-size: 1rem;
    }
    
    /* Responsive Design */
    @media (max-width: 1199px) {
        .video-frame {
            width: 250px;
        }
        
        .hero-video {
            height: 445px;
        }
        
        .curved-border-container {
            padding: 12px;
            border-radius: 30px;
        }
        
        .circle-1 {
            width: 120px;
            height: 120px;
        }
        
        /* Adjust tiny dots for medium screens */
        .tiny-dot {
            width: 2.5px;
            height: 2.5px;
        }
    }
    
    @media (max-width: 991px) {
        .hero-section {
            padding-top: 60px;
            padding-bottom: 60px;
        }
        
        .display-4 {
            font-size: 2.5rem;
        }
        
        .video-container-wrapper {
            padding: 20px;
        }
        
        .video-frame {
            width: 220px;
        }
        
        .hero-video {
            height: 390px;
        }
        
        .curved-border-container {
            padding: 10px;
            border-radius: 25px;
        }
        
        .curved-border {
            border-width: 2.5px;
        }
        
        .circle-1 {
            width: 110px;
            height: 110px;
        }
        
        .play-btn {
            width: 60px;
            height: 60px;
            font-size: 1.3rem !important;
        }
        
        .card-1 {
            left: -15px;
        }
        
        .card-2 {
            right: -15px;
        }
        
        /* Reduce number of tiny dots on tablet */
        .dot-3, .dot-4, .dot-7, .dot-8 {
            display: none;
        }
    }
    
    @media (max-width: 768px) {
        .hero-section {
            min-height: auto;
            padding-top: 40px;
            padding-bottom: 40px;
        }
        
        .display-4 {
            font-size: 2rem;
        }
        
        .video-frame {
            width: 200px;
            margin: 0 auto;
        }
        
        .hero-video {
            height: 355px;
        }
        
        .curved-border-container {
            padding: 8px;
            border-radius: 22px;
        }
        
        .curved-border {
            border-width: 2px;
        }
        
        .video-container-wrapper {
            padding: 40px 0;
        }
        
        .floating-card {
            display: none;
        }
        
        .decoration-circle, .decoration-dot {
            display: none;
        }
        
        .play-btn {
            width: 55px;
            height: 55px;
            font-size: 1.2rem !important;
        }
        
        /* Hide tiny dots on mobile if needed, or keep just a few */
        .tiny-dot {
            width: 2px;
            height: 2px;
        }
        
        /* Keep only a few dots on mobile */
        .dot-2, .dot-3, .dot-5, .dot-6, .dot-7, .dot-8 {
            display: none;
        }
    }
    
    @media (max-width: 576px) {
        .video-frame {
            width: 180px;
        }
        
        .hero-video {
            height: 320px;
        }
        
        .curved-border-container {
            padding: 6px;
            border-radius: 20px;
        }
        
        .stats-row .col-4 {
            margin-bottom: 10px;
        }
        
        .btn-lg {
            padding: 0.8rem 1.5rem !important;
            font-size: 1rem !important;
        }
        
        .play-btn {
            width: 50px;
            height: 50px;
            font-size: 1.1rem !important;
        }
        
        /* Hide tiny dots on very small screens */
        .tiny-dot {
            display: none;
        }
    }
    
    @media (max-width: 400px) {
        .video-frame {
            width: 160px;
        }
        
        .hero-video {
            height: 284px;
        }
        
        .curved-border-container {
            padding: 5px;
            border-radius: 18px;
        }
        
        .play-btn {
            width: 45px;
            height: 45px;
            font-size: 1rem !important;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Video controls
    const video = document.querySelector('.hero-video');
    const playBtn = document.querySelector('.play-btn');
    
    if (video && playBtn) {
        playBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            
            if (video.paused) {
                video.play();
                playBtn.innerHTML = '<i class="bi bi-pause-fill fs-4"></i>';
            } else {
                video.pause();
                playBtn.innerHTML = '<i class="bi bi-play-fill fs-4"></i>';
            }
        });
        
        // Update button on video events
        video.addEventListener('play', function() {
            playBtn.innerHTML = '<i class="bi bi-pause-fill fs-4"></i>';
        });
        
        video.addEventListener('pause', function() {
            playBtn.innerHTML = '<i class="bi bi-play-fill fs-4"></i>';
        });
    }
    
    // Add subtle random movement to tiny dots on hover
    const tinyDots = document.querySelectorAll('.tiny-dot');
    
    tinyDots.forEach(dot => {
        dot.addEventListener('mouseenter', function() {
            this.style.transform = `translate(${Math.random() * 20 - 10}px, ${Math.random() * 20 - 10}px) scale(1.5)`;
            this.style.opacity = '1';
            this.style.transition = 'all 0.3s ease';
        });
        
        dot.addEventListener('mouseleave', function() {
            this.style.transform = '';
            this.style.opacity = '';
            this.style.transition = 'all 0.5s ease';
        });
    });
});
</script>
@endsection