<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="description" content="Exclusive luxury braiding salon by Kholeka. Masterful artistry in knotless braids, box braids, and bespoke protective styles for the discerning client.">
    
    <title>@yield('title', 'Braids by Kholeka | Exclusive Hair Artistry')</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    
    <!-- Fonts - Only loading essential weights -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600&family=Inter:wght@300;400&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Essential Icons Only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        /* === LUXURY CSS VARIABLES === */
        :root {
            --velvet: #2d1b2e;      /* Deep Dark Purple */
            --amethyst: #8a4d76;    /* Rich Purple Accent */
            --obsidian: #121212;    /* Deep Black */
            --porcelain: #ffffff;   /* Pure White */
            --silk: #f8f9fa;        /* Light Grey */
            --slate: #6c757d;       /* Medium Grey */
            --charcoal: #343a40;    /* Dark Grey */
            --glimmer: rgba(255, 255, 255, 0.1);
        }
        
        /* === BASE ELEGANCE === */
        body {
            font-family: 'Inter', sans-serif;
            font-weight: 300;
            color: var(--charcoal);
            background: var(--porcelain);
            line-height: 1.7;
            letter-spacing: 0.2px;
            overflow-x: hidden;
            background-image: 
                radial-gradient(circle at 20% 80%, rgba(138, 77, 118, 0.03) 0%, transparent 40%),
                radial-gradient(circle at 80% 20%, rgba(45, 27, 46, 0.02) 0%, transparent 40%);
        }
        
        h1, h2, h3, h4, .elegant-font {
            font-family: 'Cormorant Garamond', serif;
            color: var(--velvet);
            font-weight: 500;
            line-height: 1.2;
        }
        
        /* === RESPONSIVE TYPOGRAPHY WITH CLAMP === */
        .display-elegant-1 { font-size: clamp(2.8rem, 6vw, 4.5rem); }
        .display-elegant-2 { font-size: clamp(2.2rem, 4.5vw, 3.5rem); }
        .display-elegant-3 { font-size: clamp(1.8rem, 3.5vw, 2.8rem); }
        .lead-responsive { font-size: clamp(1rem, 2vw, 1.2rem); }
        
        /* === GLAMOROUS NAVIGATION === */
        .nav-glamorous {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(8px);
            border-bottom: 1px solid rgba(45, 27, 46, 0.05);
            padding: 1.2rem 0; /* Reduced from 1.5rem */
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        @media (max-width: 992px) {
            .nav-glamorous {
                padding: 0.8rem 0; /* Reduced from 1rem */
                background: var(--porcelain);
            }
        }
        
        .nav-glamorous.scrolled {
            padding: 0.8rem 0; /* Matches mobile when scrolled */
            box-shadow: 0 5px 30px rgba(45, 27, 46, 0.08);
        }
        
        .brand-elegant {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(1.8rem, 3vw, 2.2rem); /* Slightly smaller */
            font-weight: 600;
            color: var(--velvet);
            position: relative;
            display: inline-block;
            letter-spacing: 1px;
        }
        
        .brand-elegant::after {
            content: '✦';
            position: absolute;
            right: -1.2rem; /* Adjusted */
            top: 50%;
            transform: translateY(-50%);
            color: var(--amethyst);
            font-size: 1rem;
        }
        
        .nav-link-glamorous {
            color: var(--charcoal);
            font-weight: 400;
            padding: 0.6rem 1.1rem !important; /* Reduced padding */
            margin: 0 0.1rem;
            position: relative;
            transition: color 0.3s ease;
            font-size: 0.95rem;
        }
        
        .nav-link-glamorous::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--amethyst), var(--velvet));
            transition: width 0.3s ease;
        }
        
        .nav-link-glamorous:hover,
        .nav-link-glamorous.active {
            color: var(--velvet);
        }
        
        .nav-link-glamorous:hover::before,
        .nav-link-glamorous.active::before {
            width: 70%;
        }
        
        /* === LUXURY BUTTON === */
        .btn-luxury {
            background: linear-gradient(135deg, var(--amethyst), var(--velvet));
            border: none;
            color: var(--porcelain);
            padding: 0.85rem 2rem; /* Slightly reduced */
            font-weight: 400;
            letter-spacing: 0.8px;
            border-radius: 0;
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-transform: uppercase;
            font-size: 0.85rem; /* Smaller */
        }
        
        .btn-luxury::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, var(--glimmer), transparent);
            transition: left 0.5s ease;
        }
        
        .btn-luxury:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(138, 77, 118, 0.25);
            color: var(--porcelain);
        }
        
        .btn-luxury:hover::before {
            left: 100%;
        }
        
        /* === FIXED NAVBAR SPACING FIX === */
        /* Add this to prevent content from hiding under fixed navbar */
        .fixed-navbar-spacer {
            height: 80px; /* Adjusted navbar height */
        }
        
        @media (max-width: 992px) {
            .fixed-navbar-spacer {
                height: 65px; /* Adjusted for mobile */
            }
        }
        
        /* === RESPONSIVE FOOTER === */
        .footer-glamorous {
            background: linear-gradient(135deg, var(--velvet) 0%, var(--obsidian) 100%);
            color: var(--silk);
            padding: 4rem 0 2rem;
            position: relative;
        }
        
        .footer-glamorous::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--amethyst), transparent);
        }
        
        .footer-title {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(1.8rem, 3vw, 2.2rem);
            color: var(--porcelain);
            margin-bottom: 1.5rem;
            display: block;
        }
        
        .footer-column h5 {
            color: var(--porcelain);
            font-size: 0.9rem;
            font-weight: 500;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 0.8rem;
        }
        
        .footer-column h5::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 30px;
            height: 1px;
            background: var(--amethyst);
        }
        
        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            display: block;
            padding: 0.4rem 0;
            transition: all 0.3s ease;
            position: relative;
            padding-left: 1.2rem;
        }
        
        .footer-links a::before {
            content: '›';
            position: absolute;
            left: 0;
            color: var(--amethyst);
            transition: transform 0.3s ease;
        }
        
        .footer-links a:hover {
            color: var(--porcelain);
            padding-left: 1.5rem;
        }
        
        .footer-links a:hover::before {
            transform: translateX(3px);
        }
        
        .footer-contact {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1.2rem;
            color: rgba(255, 255, 255, 0.8);
        }
        
        .footer-contact i {
            color: var(--amethyst);
            margin-right: 1rem;
            font-size: 1.1rem;
            margin-top: 0.2rem;
            flex-shrink: 0;
        }
        
        /* === RESPONSIVE SOCIAL ICONS === */
        .social-glamorous {
            display: flex;
            gap: 0.8rem;
            flex-wrap: wrap;
        }
        
        .social-glamorous a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
            color: var(--porcelain);
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .social-glamorous a:hover {
            background: var(--amethyst);
            transform: translateY(-3px);
            border-color: transparent;
        }
        
        /* === RESPONSIVE SPACING SYSTEM === */
        .section-elegant {
            padding: clamp(4rem, 8vw, 6rem) 0;
        }
        
        /* Add padding-top to first section to account for fixed navbar */
        .first-content-section {
            padding-top: calc(clamp(4rem, 8vw, 6rem) + 80px) !important;
        }
        
        @media (max-width: 992px) {
            .first-content-section {
                padding-top: calc(clamp(4rem, 8vw, 6rem) + 65px) !important;
            }
        }
        
        .py-elegant {
            padding-top: clamp(2rem, 4vw, 3rem);
            padding-bottom: clamp(2rem, 4vw, 3rem);
        }
        
        .my-elegant {
            margin-top: clamp(2rem, 4vw, 3rem);
            margin-bottom: clamp(2rem, 4vw, 3rem);
        }
        
        /* === MOBILE OPTIMIZATION === */
        @media (max-width: 768px) {
            .nav-glamorous .navbar-collapse {
                background: var(--porcelain);
                padding: 1.2rem; /* Reduced */
                border-radius: 12px;
                margin-top: 0.8rem; /* Reduced */
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            }
            
            .nav-link-glamorous {
                padding: 0.6rem 0 !important; /* Reduced */
                margin: 0.2rem 0; /* Reduced */
                border-bottom: 1px solid rgba(45, 27, 46, 0.05);
            }
            
            .nav-link-glamorous::before {
                display: none;
            }
            
            .btn-luxury {
                width: 100%;
                max-width: 100%;
                margin-top: 0.8rem; /* Reduced */
                padding: 0.75rem 1.5rem; /* Smaller on mobile */
            }
            
            .footer-column {
                margin-bottom: 2.5rem;
                text-align: center;
            }
            
            .footer-column h5::after {
                left: 50%;
                transform: translateX(-50%);
            }
            
            .footer-links a {
                padding-left: 0;
                text-align: center;
            }
            
            .footer-links a::before {
                display: none;
            }
            
            .social-glamorous {
                justify-content: center;
            }
            
            .mobile-text-center {
                text-align: center;
            }
        }
        
        @media (min-width: 769px) and (max-width: 1199px) {
            .nav-link-glamorous {
                padding: 0.6rem 0.8rem !important; /* Reduced */
                font-size: 0.9rem;
            }
            
            .btn-luxury {
                padding: 0.8rem 1.5rem; /* Reduced */
            }
        }
        
        /* === LUXURY UTILITY CLASSES === */
        .text-velvet { color: var(--velvet) !important; }
        .text-amethyst { color: var(--amethyst) !important; }
        .bg-velvet { background-color: var(--velvet) !important; }
        .bg-silk { background-color: var(--silk) !important; }
        
        .letter-spacing-1 { letter-spacing: 1px; }
        .letter-spacing-2 { letter-spacing: 2px; }
        
        .opacity-75 { opacity: 0.75; }
        .opacity-60 { opacity: 0.6; }
        
        /* === GLAMOROUS CARD === */
        .card-glamorous {
            background: var(--porcelain);
            border: none;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(45, 27, 46, 0.08);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            overflow: hidden;
            position: relative;
        }
        
        .card-glamorous::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, var(--amethyst), var(--velvet));
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.4s ease;
        }
        
        .card-glamorous:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(45, 27, 46, 0.15);
        }
        
        .card-glamorous:hover::before {
            transform: scaleX(1);
        }
        
        /* === MAIN CONTENT SPACING === */
        main {
            min-height: calc(100vh - 380px); /* Adjusted for smaller footer */
        }
    </style>
    
    @stack('styles')
</head>
<body>
    <!-- === GLAMOROUS NAVIGATION === -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top nav-glamorous" id="glamorousNav">
        <div class="container">
            <a class="navbar-brand brand-elegant" href="{{ route('home') }}">
                Braids by Kholeka
            </a>
            
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#glamorousNavContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="glamorousNavContent">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link nav-link-glamorous {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-glamorous {{ request()->is('services') ? 'active' : '' }}" href="{{ route('services.index') }}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-glamorous {{ request()->is('portfolio') ? 'active' : '' }}" href="{{ route('portfolio') }}">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-glamorous {{ request()->is('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-glamorous {{ request()->is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                        <a class="btn btn-luxury d-inline-flex align-items-center justify-content-center" href="{{ route('contact') }}">
                            <i class="bi bi-calendar3 me-2"></i> Reserve
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Spacer for fixed navbar - THIS FIXES THE OVERLAY ISSUE -->
    <div class="fixed-navbar-spacer"></div>

    <!-- === MAIN CONTENT === -->
    <main>
        @yield('content')
    </main>

    <!-- === GLAMOROUS FOOTER === -->
    <footer class="footer-glamorous">
        <div class="container">
            <div class="row g-4">
                <!-- Brand Column -->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <a href="{{ route('home') }}" class="footer-title">Braids by Kholeka</a>
                    <p class="opacity-75 mb-4">
                        Where hair transforms into art. Exclusive braiding experiences with meticulous attention to detail and unparalleled craftsmanship.
                    </p>
                    <div class="social-glamorous">
                        <a href="#" aria-label="Instagram" title="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" aria-label="Pinterest" title="Pinterest"><i class="bi bi-pinterest"></i></a>
                        <a href="#" aria-label="Facebook" title="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" aria-label="TikTok" title="TikTok"><i class="bi bi-tiktok"></i></a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div class="col-lg-2 col-md-4 col-6 footer-column">
                    <h5>Explore</h5>
                    <div class="footer-links">
                        <a href="{{ route('home') }}">Home</a>
                        <a href="{{ route('services.index') }}">Services</a>
                        <a href="{{ route('portfolio') }}">Portfolio</a>
                        <a href="{{ route('about') }}">My Story</a>
                        <a href="{{ route('contact') }}">Consultation</a>
                    </div>
                </div>
                
                <!-- Contact Info -->
                <div class="col-lg-3 col-md-4 col-6 footer-column">
                    <h5>Contact</h5>
                    <div class="footer-contact">
                        <i class="bi bi-geo-alt"></i>
                        <div>
                            <strong class="d-block">Studio</strong>
                            <span>123 Luxury Lane<br>Braid District</span>
                        </div>
                    </div>
                    <div class="footer-contact">
                        <i class="bi bi-telephone"></i>
                        <div>
                            <strong class="d-block">By Appointment</strong>
                            <a href="tel:+1234567890" class="text-decoration-none">(123) 456-7890</a>
                        </div>
                    </div>
                    <div class="footer-contact">
                        <i class="bi bi-envelope"></i>
                        <div>
                            <strong class="d-block">Email</strong>
                            <a href="mailto:reservations@braidsbykholeka.com" class="text-decoration-none">reservations@braidsbykholeka.com</a>
                        </div>
                    </div>
                </div>
                
                <!-- Hours -->
                <div class="col-lg-3 col-md-4 footer-column mobile-text-center">
                    <h5>Hours</h5>
                    <div class="opacity-75">
                        <div class="d-flex justify-content-between mb-2">
                            <span>Tue - Thu</span>
                            <span>10:00 - 18:00</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Fri - Sat</span>
                            <span>09:00 - 19:00</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Sunday</span>
                            <span class="text-amethyst">By Appointment</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span>Monday</span>
                            <span class="opacity-60">Closed</span>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="{{ route('contact') }}" class="btn btn-outline-light btn-sm px-3 py-2">
                            <i class="bi bi-star me-1"></i> VIP Inquiry
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Divider -->
            <hr class="my-elegant opacity-25">
            
            <!-- Copyright -->
            <div class="row align-items-center py-elegant">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <p class="mb-0 opacity-75">&copy; <span id="currentYear">{{ date('Y') }}</span> Braids by Kholeka. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0 opacity-75">
                        <i class="bi bi-heart-fill text-amethyst mx-1"></i> Crafted for extraordinary beauty
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- === PERFORMANCE-OPTIMIZED SCRIPTS === -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Luxury scroll effect for navbar
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('glamorousNav');
            if (window.scrollY > 30) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
        
        // Mobile navigation close on click
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('.nav-link-glamorous');
            const navbarCollapse = document.querySelector('.navbar-collapse');
            const bsCollapse = new bootstrap.Collapse(navbarCollapse, { toggle: false });
            
            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    if (window.innerWidth < 992) {
                        bsCollapse.hide();
                    }
                });
            });
            
            // Update copyright year
            document.getElementById('currentYear').textContent = new Date().getFullYear();
            
            // Luxury page load effect
            setTimeout(() => {
                document.body.style.opacity = '1';
                document.body.style.transition = 'opacity 0.5s ease';
            }, 50);
            
            // Set initial body opacity
            document.body.style.opacity = '0';
            
            // Adjust navbar spacer height dynamically
            function updateNavbarSpacer() {
                const navbar = document.getElementById('glamorousNav');
                const spacer = document.querySelector('.fixed-navbar-spacer');
                if (navbar && spacer) {
                    spacer.style.height = navbar.offsetHeight + 'px';
                }
            }
            
            // Update on load and resize
            updateNavbarSpacer();
            window.addEventListener('resize', updateNavbarSpacer);
        });
    </script>
    
    @stack('scripts')
</body>
</html>