<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Braids by Kholeka | Luxury Hair Artistry')</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/watermarks/salon/favicon.ico') }}">
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@400;500;600;700;800;900&family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
        /* ===== CSS VARIABLES ===== */
        :root {
            /* Premium Color Palette */
            --primary-pink: #FF2D8F;
            --secondary-pink: #FF5DA8;
            --light-pink: #FFF0F7;
            --soft-pink: #FFE8F5;
            --deep-pink: #E60073;
            --black: #000000;
            --dark-gray: #1A1A1A;
            --medium-gray: #333333;
            --light-gray: #F8F8F8;
            --white: #FFFFFF;
            --cream: #FFFCF9;
            
            /* Gradients */
            --gradient-pink: linear-gradient(135deg, var(--primary-pink) 0%, var(--deep-pink) 100%);
            --gradient-light: linear-gradient(135deg, var(--soft-pink) 0%, var(--cream) 100%);
            --gradient-dark: linear-gradient(135deg, var(--black) 0%, var(--dark-gray) 100%);
            --gradient-gold-pink: linear-gradient(135deg, #FFD700 0%, var(--primary-pink) 100%);
            
            /* Shadows */
            --shadow-soft: 0 4px 20px rgba(255, 45, 143, 0.08);
            --shadow-medium: 0 8px 30px rgba(0, 0, 0, 0.12);
            --shadow-hard: 0 15px 50px rgba(0, 0, 0, 0.2);
            --shadow-pink: 0 10px 30px rgba(255, 45, 143, 0.2);
            --shadow-pink-heavy: 0 20px 60px rgba(255, 45, 143, 0.3);
            
            /* Spacing System */
            --space-xs: 0.5rem;
            --space-sm: 1rem;
            --space-md: 2rem;
            --space-lg: 3rem;
            --space-xl: 4rem;
            --space-xxl: 6rem;
            
            /* Transitions */
            --transition-smooth: 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            --transition-bounce: 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            
            /* Border Radius */
            --radius-sm: 8px;
            --radius-md: 16px;
            --radius-lg: 24px;
            --radius-xl: 32px;
            --radius-round: 50px;
        }
        
        /* ===== CSS RESET & BASE ===== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        html {
            scroll-behavior: smooth;
            scroll-padding-top: 100px;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            color: var(--dark-gray);
            background: var(--white);
            line-height: 1.7;
            overflow-x: hidden;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background: linear-gradient(135deg, var(--white) 0%, var(--soft-pink) 100%);
        }
        
        h1, h2, h3, .display-text {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            color: var(--black);
            line-height: 1.2;
            letter-spacing: -0.02em;
        }
        
        h4, h5, h6 {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            color: var(--dark-gray);
        }
        
        a {
            text-decoration: none;
            color: inherit;
            transition: var(--transition-smooth);
        }
        
        img {
            max-width: 100%;
            height: auto;
            display: block;
        }
        
        /* ===== LAYOUT UTILITIES ===== */
        .container-fluid {
            padding-left: var(--space-md);
            padding-right: var(--space-md);
        }
        
        .container {
            max-width: 1280px;
            padding-left: var(--space-md);
            padding-right: var(--space-md);
        }
        
        section {
            padding: var(--space-xxl) 0;
            position: relative;
        }
        
        .section-sm {
            padding: var(--space-xl) 0;
        }
        
        .section-lg {
            padding: 8rem 0;
        }
        
        /* ===== TYPOGRAPHY ===== */
        .display-1 {
            font-size: clamp(3.5rem, 5vw, 5.5rem);
            font-weight: 800;
            line-height: 1.1;
        }
        
        .display-2 {
            font-size: clamp(2.5rem, 4vw, 4rem);
            font-weight: 700;
        }
        
        .lead {
            font-size: 1.25rem;
            font-weight: 400;
            color: var(--medium-gray);
        }
        
        .text-gradient {
            background: var(--gradient-pink);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            display: inline-block;
        }
        
        /* ===== BUTTONS ===== */
        .btn {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: 1rem;
            letter-spacing: 0.5px;
            padding: 1rem 2.5rem;
            border-radius: var(--radius-round);
            border: none;
            transition: var(--transition-bounce);
            position: relative;
            overflow: hidden;
            z-index: 1;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            text-transform: uppercase;
            font-size: 0.9rem;
        }
        
        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: var(--transition-smooth);
            z-index: -1;
        }
        
        .btn:hover::before {
            left: 100%;
        }
        
        .btn-primary {
            background: var(--gradient-pink);
            color: var(--white);
            box-shadow: var(--shadow-pink);
        }
        
        .btn-primary:hover {
            transform: translateY(-4px) scale(1.02);
            box-shadow: var(--shadow-pink-heavy);
            color: var(--white);
        }
        
        .btn-outline {
            background: transparent;
            color: var(--primary-pink);
            border: 2px solid var(--primary-pink);
            position: relative;
            overflow: hidden;
        }
        
        .btn-outline::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--gradient-pink);
            transform: translateX(-100%);
            transition: var(--transition-smooth);
            z-index: -1;
        }
        
        .btn-outline:hover {
            color: var(--white);
            border-color: transparent;
        }
        
        .btn-outline:hover::after {
            transform: translateX(0);
        }
        
        /* ===== NAVIGATION - PERFECTLY ALIGNED ===== */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background: rgba(255, 255, 255, 0.96);
            backdrop-filter: blur(15px);
            padding: 1.25rem 0;
            z-index: 9999;
            transition: var(--transition-smooth);
            box-shadow: 0 2px 30px rgba(0, 0, 0, 0.05);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .navbar.scrolled {
            padding: 0.875rem 0;
            background: rgba(255, 255, 255, 0.98);
            box-shadow: var(--shadow-medium);
            border-bottom: 1px solid rgba(255, 45, 143, 0.1);
        }
        
        .navbar-brand {
            display: flex;
            align-items: center;
            padding: 0;
            margin-right: var(--space-lg);
        }
        
        .nav-logo {
            height: 52px;
            width: auto;
            transition: var(--transition-bounce);
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1));
        }
        
        .nav-logo:hover {
            transform: scale(1.05) rotate(-2deg);
        }
        
        .navbar-nav {
            gap: 0.25rem;
            align-items: center;
        }
        
        .nav-item {
            position: relative;
        }
        
        .nav-link {
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            font-size: 0.95rem;
            color: var(--dark-gray) !important;
            padding: 0.75rem 1.5rem !important;
            border-radius: var(--radius-round);
            transition: var(--transition-smooth);
            position: relative;
            overflow: hidden;
        }
        
        .nav-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--gradient-pink);
            opacity: 0;
            transition: var(--transition-smooth);
            z-index: -1;
            border-radius: var(--radius-round);
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 8px;
            left: 50%;
            transform: translateX(-50%);
            width: 6px;
            height: 6px;
            background: var(--primary-pink);
            border-radius: 50%;
            opacity: 0;
            transition: var(--transition-smooth);
        }
        
        .nav-link:hover,
        .nav-link.active {
            color: var(--white) !important;
            transform: translateY(-2px);
        }
        
        .nav-link:hover::before,
        .nav-link.active::before {
            opacity: 1;
        }
        
        .nav-link:hover::after,
        .nav-link.active::after {
            opacity: 1;
            bottom: 4px;
        }
        
        /* Mobile Navigation Toggle */
        .navbar-toggler {
            width: 48px;
            height: 48px;
            padding: 0.75rem;
            border: 1px solid rgba(255, 45, 143, 0.2);
            border-radius: 12px;
            background: var(--white);
            position: relative;
            transition: var(--transition-smooth);
        }
        
        .navbar-toggler:focus {
            box-shadow: 0 0 0 3px rgba(255, 45, 143, 0.1);
        }
        
        .navbar-toggler span {
            display: block;
            width: 22px;
            height: 2px;
            background: var(--primary-pink);
            margin: 4px auto;
            transition: var(--transition-smooth);
            transform-origin: center;
        }
        
        .navbar-toggler[aria-expanded="true"] span:nth-child(1) {
            transform: translateY(6px) rotate(45deg);
        }
        
        .navbar-toggler[aria-expanded="true"] span:nth-child(2) {
            opacity: 0;
            transform: scaleX(0);
        }
        
        .navbar-toggler[aria-expanded="true"] span:nth-child(3) {
            transform: translateY(-6px) rotate(-45deg);
        }
        
        /* ===== MAIN CONTENT ===== */
        main {
            flex: 1;
            padding-top: 100px;
            width: 100%;
            overflow: hidden;
        }
        
        /* ===== FOOTER - ULTRA PREMIUM ===== */
        .footer {
            background: var(--gradient-dark);
            color: var(--white);
            padding: var(--space-xxl) 0 var(--space-lg);
            margin-top: auto;
            position: relative;
            overflow: hidden;
        }
        
        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient-pink);
            z-index: 1;
        }
        
        .footer::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 20% 50%, rgba(255, 45, 143, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255, 45, 143, 0.05) 0%, transparent 50%);
            pointer-events: none;
        }
        
        /* FIXED FOOTER LOGO - ORIGINAL STYLING */
        .footer-brand {
            display: block;
            margin-bottom: var(--space-md);
            position: relative;
            z-index: 2;
        }
        
        .footer-logo {
            height: 60px;
            width: auto;
            filter: 
                drop-shadow(0 2px 4px rgba(0, 0, 0, 0.3))
                brightness(1.1)
                contrast(1.1);
            transition: var(--transition-bounce);
        }
        
        /* Original logo effect - no inversion, just enhanced for dark background */
        .footer-logo:hover {
            transform: scale(1.08) rotate(2deg);
            filter: 
                drop-shadow(0 4px 8px rgba(255, 45, 143, 0.3))
                brightness(1.2)
                contrast(1.2);
        }
        
        .footer-heading {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: 1.1rem;
            letter-spacing: 1.5px;
            color: var(--white);
            margin-bottom: var(--space-md);
            padding-bottom: 0.875rem;
            position: relative;
            display: inline-block;
            text-transform: uppercase;
        }
        
        .footer-heading::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 45px;
            height: 3px;
            background: var(--gradient-pink);
            border-radius: 2px;
            transition: var(--transition-smooth);
        }
        
        .footer-heading:hover::after {
            width: 100%;
        }
        
        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .footer-links li {
            margin-bottom: 0.875rem;
            transform: translateX(0);
            transition: var(--transition-smooth);
        }
        
        .footer-links li:hover {
            transform: translateX(8px);
        }
        
        .footer-links a {
            color: rgba(255, 255, 255, 0.75);
            text-decoration: none;
            font-size: 0.95rem;
            font-weight: 400;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            transition: var(--transition-smooth);
        }
        
        .footer-links a::before {
            content: '→';
            color: var(--primary-pink);
            font-weight: 700;
            opacity: 0;
            transform: translateX(-10px);
            transition: var(--transition-smooth);
        }
        
        .footer-links a:hover {
            color: var(--white);
            padding-left: 5px;
        }
        
        .footer-links a:hover::before {
            opacity: 1;
            transform: translateX(0);
        }
        
        .contact-grid {
            display: grid;
            gap: 1.5rem;
        }
        
        .contact-card {
            display: flex;
            align-items: flex-start;
            gap: 1.25rem;
            padding: 1.25rem;
            background: rgba(255, 255, 255, 0.05);
            border-radius: var(--radius-md);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: var(--transition-smooth);
            position: relative;
            overflow: hidden;
        }
        
        .contact-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 3px;
            height: 100%;
            background: var(--gradient-pink);
            transform: scaleY(0);
            transition: var(--transition-smooth);
        }
        
        .contact-card:hover {
            background: rgba(255, 255, 255, 0.08);
            transform: translateY(-4px);
            border-color: rgba(255, 45, 143, 0.3);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }
        
        .contact-card:hover::before {
            transform: scaleY(1);
        }
        
        .contact-icon {
            color: var(--primary-pink);
            font-size: 1.5rem;
            min-width: 28px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .contact-details {
            flex: 1;
        }
        
        .contact-details strong {
            display: block;
            color: var(--white);
            margin-bottom: 0.375rem;
            font-size: 0.95rem;
            font-weight: 600;
        }
        
        .contact-details span,
        .contact-details a {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
            line-height: 1.5;
        }
        
        .contact-details a:hover {
            color: var(--primary-pink);
        }
        
        .social-grid {
            display: flex;
            gap: 0.875rem;
            margin-top: var(--space-md);
            flex-wrap: wrap;
        }
        
        .social-link {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 44px;
            height: 44px;
            background: rgba(255, 255, 255, 0.08);
            border-radius: 12px;
            color: var(--white);
            transition: var(--transition-bounce);
            border: 1px solid rgba(255, 255, 255, 0.15);
            position: relative;
            overflow: hidden;
        }
        
        .social-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--gradient-pink);
            transform: scale(0);
            transition: var(--transition-smooth);
            border-radius: inherit;
            z-index: -1;
        }
        
        .social-link:hover {
            transform: translateY(-4px) rotate(5deg);
            border-color: transparent;
            color: var(--white);
        }
        
        .social-link:hover::before {
            transform: scale(1);
        }
        
        .hours-table {
            display: grid;
            gap: 1rem;
        }
        
        .hours-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            background: rgba(255, 255, 255, 0.05);
            border-radius: var(--radius-md);
            transition: var(--transition-smooth);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .hours-row:hover {
            background: rgba(255, 255, 255, 0.08);
            transform: translateX(4px);
            border-color: rgba(255, 45, 143, 0.2);
        }
        
        .hours-day {
            color: var(--white);
            font-weight: 500;
            font-size: 0.95rem;
        }
        
        .hours-time {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
        }
        
        .hours-time.highlight {
            color: var(--primary-pink);
            font-weight: 600;
            position: relative;
            padding: 0.25rem 0.75rem;
            background: rgba(255, 45, 143, 0.1);
            border-radius: 20px;
            border: 1px solid rgba(255, 45, 143, 0.2);
        }
        
        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: var(--space-lg);
            margin-top: var(--space-xxl);
            text-align: center;
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.9rem;
            position: relative;
            z-index: 2;
        }
        
        .copyright a {
            color: var(--primary-pink);
            text-decoration: none;
            font-weight: 500;
        }
        
        .copyright a:hover {
            color: var(--white);
            text-decoration: underline;
        }
        
        /* ===== SCROLL TO TOP BUTTON ===== */
        .scroll-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 56px;
            height: 56px;
            background: var(--gradient-pink);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transform: translateY(20px) scale(0.9);
            transition: var(--transition-bounce);
            z-index: 999;
            box-shadow: var(--shadow-pink);
            border: none;
            overflow: hidden;
        }
        
        .scroll-top::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transform: translateX(-100%);
            transition: var(--transition-smooth);
        }
        
        .scroll-top:hover::before {
            transform: translateX(100%);
        }
        
        .scroll-top.active {
            opacity: 1;
            visibility: visible;
            transform: translateY(0) scale(1);
        }
        
        .scroll-top:hover {
            transform: translateY(-6px) scale(1.05);
            box-shadow: var(--shadow-pink-heavy);
        }
        
        /* ===== DECORATIVE ELEMENTS ===== */
        .accent-line {
            width: 80px;
            height: 4px;
            background: var(--gradient-pink);
            margin: var(--space-md) 0;
            border-radius: 2px;
            position: relative;
            overflow: hidden;
        }
        
        .accent-line::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 20px;
            height: 100%;
            background: var(--white);
            animation: shimmer 2s infinite;
        }
        
        @keyframes shimmer {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(500%); }
        }
        
        .floating-shape {
            position: absolute;
            border-radius: 50%;
            background: var(--gradient-pink);
            opacity: 0.1;
            filter: blur(40px);
            z-index: -1;
        }
        
        /* ===== RESPONSIVE DESIGN - PERFECT FOR ALL DEVICES ===== */
        @media (min-width: 1400px) {
            .container {
                max-width: 1400px;
            }
            
            .navbar-nav {
                gap: 0.5rem;
            }
        }
        
        @media (max-width: 1199.98px) {
            .container {
                max-width: 100%;
                padding-left: var(--space-lg);
                padding-right: var(--space-lg);
            }
            
            section {
                padding: var(--space-xl) 0;
            }
            
            .nav-link {
                padding: 0.625rem 1.25rem !important;
            }
        }
        
        @media (max-width: 991.98px) {
            .navbar-collapse {
                background: rgba(255, 255, 255, 0.98);
                backdrop-filter: blur(20px);
                padding: var(--space-md);
                margin-top: var(--space-sm);
                border-radius: var(--radius-lg);
                box-shadow: var(--shadow-hard);
                border: 1px solid rgba(255, 45, 143, 0.1);
            }
            
            .navbar-nav {
                gap: 0.5rem;
                padding: var(--space-sm) 0;
            }
            
            .nav-item {
                width: 100%;
            }
            
            .nav-link {
                width: 100%;
                text-align: center;
                padding: 1rem 1.5rem !important;
                border-radius: var(--radius-md);
                justify-content: center;
            }
            
            .nav-link::after {
                display: none;
            }
            
            .btn-book {
                width: 100%;
                margin-top: var(--space-sm);
                justify-content: center;
            }
            
            .footer {
                padding: var(--space-xl) 0 var(--space-lg);
            }
            
            .footer .col-lg-3,
            .footer .col-md-6 {
                margin-bottom: var(--space-xl);
            }
            
            .footer-heading {
                font-size: 1rem;
            }
            
            .footer-logo {
                height: 55px;
            }
        }
        
        @media (max-width: 767.98px) {
            :root {
                --space-xl: 3rem;
                --space-xxl: 4rem;
            }
            
            main {
                padding-top: 90px;
            }
            
            .navbar {
                padding: 1rem 0;
            }
            
            .nav-logo {
                height: 48px;
            }
            
            .display-1 {
                font-size: clamp(2.75rem, 4vw, 4rem);
            }
            
            .display-2 {
                font-size: clamp(2.25rem, 3.5vw, 3rem);
            }
            
            .btn {
                padding: 0.875rem 2rem;
                font-size: 0.875rem;
            }
            
            .footer {
                padding: var(--space-lg) 0 var(--space-md);
            }
            
            .footer-logo {
                height: 50px;
            }
            
            .contact-card {
                padding: 1rem;
            }
            
            .scroll-top {
                bottom: 20px;
                right: 20px;
                width: 52px;
                height: 52px;
            }
            
            .copyright {
                padding-top: var(--space-md);
                margin-top: var(--space-xl);
            }
        }
        
        @media (max-width: 575.98px) {
            .container {
                padding-left: var(--space-sm);
                padding-right: var(--space-sm);
            }
            
            section {
                padding: var(--space-lg) 0;
            }
            
            h1 {
                font-size: 2.25rem;
            }
            
            h2 {
                font-size: 1.875rem;
            }
            
            .btn {
                width: 100%;
                max-width: 320px;
                margin-left: auto;
                margin-right: auto;
            }
            
            .footer .col-12 {
                margin-bottom: var(--space-lg);
            }
            
            .social-grid {
                justify-content: center;
            }
            
            .hours-row {
                padding: 0.875rem;
            }
        }
        
        /* ===== ANIMATIONS ===== */
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }
        
        .floating {
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .fade-in {
            animation: fadeIn 0.8s ease-out forwards;
        }
        
        /* ===== CUSTOM SCROLLBAR ===== */
        ::-webkit-scrollbar {
            width: 10px;
        }
        
        ::-webkit-scrollbar-track {
            background: var(--soft-pink);
        }
        
        ::-webkit-scrollbar-thumb {
            background: var(--gradient-pink);
            border-radius: var(--radius-round);
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: var(--deep-pink);
        }
    </style>
</head>
<body>
    <!-- Scroll to Top Button -->
    <button class="scroll-top">
        <i class="bi bi-chevron-up fs-5"></i>
    </button>
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/watermarks/salon/logo2.png') }}" 
                     alt="Braids by Kholeka - Luxury Hair Artistry" 
                     class="nav-logo"
                     onerror="this.onerror=null; this.src='https://via.placeholder.com/200x50/FF2D8F/FFFFFF?text=Braids+by+Kholeka'">
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" 
                    aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" 
                           href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('services.*') ? 'active' : '' }}" 
                           href="{{ route('services.index') }}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('portfolio.*') ? 'active' : '' }}" 
                           href="{{ route('portfolio') }}">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" 
                           href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" 
                           href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
                
                <div class="d-lg-none w-100 text-center mt-3">
                    <a href="{{ route('contact') }}" class="btn btn-primary ms-lg-3 d-inline-block">
                        <i class="bi bi-calendar-check me-2"></i>
                        <span>Book Appointment</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <a href="{{ route('home') }}" class="footer-brand">
                        <img src="{{ asset('images/watermarks/salon/logo2.png') }}" 
                             alt="Braids by Kholeka - Luxury Hair Artistry" 
                             class="footer-logo"
                             onerror="this.onerror=null; this.src='https://via.placeholder.com/200x50/FF2D8F/FFFFFF?text=Braids+by+Kholeka'">
                    </a>
                    <p class="mb-4" style="color: rgba(255, 255, 255, 0.85); font-size: 1rem; line-height: 1.7;">
                        Where hair becomes art. Professional braiding services with meticulous attention to detail 
                        and luxury experience. Each style is crafted with passion and precision.
                    </p>
                    <div class="social-grid">
                        <a href="https://instagram.com" class="social-link" aria-label="Instagram">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://facebook.com" class="social-link" aria-label="Facebook">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="https://pinterest.com" class="social-link" aria-label="Pinterest">
                            <i class="bi bi-pinterest"></i>
                        </a>
                        <a href="https://tiktok.com" class="social-link" aria-label="TikTok">
                            <i class="bi bi-tiktok"></i>
                        </a>
                        <a href="https://youtube.com" class="social-link" aria-label="YouTube">
                            <i class="bi bi-youtube"></i>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-6">
                    <h6 class="footer-heading">Quick Links</h6>
                    <ul class="footer-links">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('services.index') }}">Services</a></li>
                        <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                        <li><a href="{{ route('about') }}">About Me</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                        <li><a href="#faq">FAQ</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <h6 class="footer-heading">Contact Info</h6>
                    <div class="contact-grid">
                        <div class="contact-card">
                            <div class="contact-icon">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div class="contact-details">
                                <strong>Studio Location</strong>
                                <span>123 Luxury Lane<br>Suite 401, Beauty District<br>New York, NY 10001</span>
                            </div>
                        </div>
                        <div class="contact-card">
                            <div class="contact-icon">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div class="contact-details">
                                <strong>Phone Number</strong>
                                <a href="tel:+1234567890">+1 (234) 567-890</a>
                            </div>
                        </div>
                        <div class="contact-card">
                            <div class="contact-icon">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <div class="contact-details">
                                <strong>Email Address</strong>
                                <a href="mailto:info@braidsbykholeka.com">artistry@braidsbykholeka.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <h6 class="footer-heading">Studio Hours</h6>
                    <div class="hours-table">
                        <div class="hours-row">
                            <span class="hours-day">Monday</span>
                            <span class="hours-time">By Appointment</span>
                        </div>
                        <div class="hours-row">
                            <span class="hours-day">Tuesday - Thursday</span>
                            <span class="hours-time">10:00 AM - 7:00 PM</span>
                        </div>
                        <div class="hours-row">
                            <span class="hours-day">Friday - Saturday</span>
                            <span class="hours-time">9:00 AM - 8:00 PM</span>
                        </div>
                        <div class="hours-row">
                            <span class="hours-day">Sunday</span>
                            <span class="hours-time highlight">VIP Appointments Only</span>
                        </div>
                    </div>
                    <a href="{{ route('contact') }}" class="btn btn-primary mt-4 w-100">
                        <i class="bi bi-calendar2-week me-2"></i>
                        <span>Book VIP Session</span>
                    </a>
                </div>
            </div>
            
            <div class="copyright">
                <div class="row align-items-center">
                    <div class="col-lg-6 text-center text-lg-start mb-3 mb-lg-0">
                        <p class="mb-0">&copy; <span id="currentYear">{{ date('Y') }}</span> 
                            <a href="{{ route('home') }}" class="text-gradient">Braids by Kholeka</a>. 
                            All rights reserved. <a href="/privacy" style="color: rgba(255, 255, 255, 0.7);">Privacy Policy</a>
                        </p>
                    </div>
                    <div class="col-lg-6 text-center text-lg-end">
                        <p class="mb-0">
                            <i class="bi bi-heart-fill text-pink me-1"></i>
                            Handcrafted with passion & precision
                            <i class="bi bi-stars text-pink ms-2"></i>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        // Initialize AOS with custom settings
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100,
            easing: 'ease-out-cubic',
            delay: 150
        });
        
        // Wait for DOM to load
        document.addEventListener('DOMContentLoaded', function() {
            
            // 1. Update copyright year dynamically
            document.getElementById('currentYear').textContent = new Date().getFullYear();
            
            // 2. Enhanced Navbar Scroll Effect
            const navbar = document.querySelector('.navbar');
            const scrollTopBtn = document.querySelector('.scroll-top');
            
            function updateScrollEffects() {
                const scrollY = window.scrollY;
                
                if (scrollY > 80) {
                    navbar.classList.add('scrolled');
                    scrollTopBtn.classList.add('active');
                } else {
                    navbar.classList.remove('scrolled');
                    scrollTopBtn.classList.remove('active');
                }
                
                // Parallax effect for navbar
                navbar.style.transform = `translateY(${scrollY * 0.02}px)`;
            }
            
            window.addEventListener('scroll', updateScrollEffects);
            updateScrollEffects();
            
            // 3. Smooth Scroll to Top with easing
            scrollTopBtn.addEventListener('click', () => {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
            
            // 4. Mobile Menu Enhancement
            const navLinks = document.querySelectorAll('.nav-link');
            const navbarCollapse = document.querySelector('.navbar-collapse');
            
            navLinks.forEach(link => {
                link.addEventListener('click', () => {
                    if (window.innerWidth < 992) {
                        const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
                        if (bsCollapse) {
                            // Add closing animation
                            navbarCollapse.style.opacity = '0';
                            navbarCollapse.style.transform = 'translateY(-10px)';
                            
                            setTimeout(() => {
                                bsCollapse.hide();
                                navbarCollapse.style.opacity = '';
                                navbarCollapse.style.transform = '';
                            }, 300);
                        }
                    }
                });
            });
            
            // 5. Premium Button Animations
            const buttons = document.querySelectorAll('.btn');
            buttons.forEach(button => {
                // Mouse enter effect
                button.addEventListener('mouseenter', (e) => {
                    const rect = button.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    
                    button.style.setProperty('--mouse-x', `${x}px`);
                    button.style.setProperty('--mouse-y', `${y}px`);
                    
                    button.style.transform = 'translateY(-4px) scale(1.02)';
                });
                
                // Mouse leave effect
                button.addEventListener('mouseleave', () => {
                    button.style.transform = 'translateY(0) scale(1)';
                });
                
                // Click ripple effect
                button.addEventListener('click', function(e) {
                    const ripple = document.createElement('span');
                    const rect = this.getBoundingClientRect();
                    const size = Math.max(rect.width, rect.height);
                    const x = e.clientX - rect.left - size / 2;
                    const y = e.clientY - rect.top - size / 2;
                    
                    ripple.style.cssText = `
                        position: absolute;
                        border-radius: 50%;
                        background: rgba(255, 255, 255, 0.4);
                        transform: scale(0);
                        animation: ripple 0.6s linear;
                        width: ${size}px;
                        height: ${size}px;
                        top: ${y}px;
                        left: ${x}px;
                        pointer-events: none;
                        z-index: 1;
                    `;
                    
                    this.appendChild(ripple);
                    
                    setTimeout(() => {
                        if (ripple.parentNode === this) {
                            this.removeChild(ripple);
                        }
                    }, 600);
                });
            });
            
            // 6. Interactive Footer Elements
            const footerCards = document.querySelectorAll('.contact-card, .hours-row');
            footerCards.forEach(card => {
                card.addEventListener('mouseenter', () => {
                    card.style.transform = 'translateY(-4px)';
                });
                
                card.addEventListener('mouseleave', () => {
                    card.style.transform = 'translateY(0)';
                });
            });
            
            // 7. Social Links Hover Effect
            const socialLinks = document.querySelectorAll('.social-link');
            socialLinks.forEach(link => {
                link.addEventListener('mouseenter', () => {
                    link.style.transform = 'translateY(-6px) rotate(5deg)';
                });
                
                link.addEventListener('mouseleave', () => {
                    link.style.transform = 'translateY(0) rotate(0)';
                });
            });
            
            // 8. Logo Animation Enhancement
            const logos = document.querySelectorAll('.nav-logo, .footer-logo');
            logos.forEach(logo => {
                logo.addEventListener('mouseenter', () => {
                    logo.style.transform = 'scale(1.08) rotate(-2deg)';
                });
                
                logo.addEventListener('mouseleave', () => {
                    logo.style.transform = 'scale(1) rotate(0)';
                });
            });
            
            // 9. Form Input Focus Effects (if forms exist)
            const forms = document.querySelectorAll('form');
            forms.forEach(form => {
                const inputs = form.querySelectorAll('input, textarea, select');
                
                inputs.forEach(input => {
                    input.addEventListener('focus', () => {
                        input.parentElement.style.transform = 'translateY(-3px)';
                        input.parentElement.style.boxShadow = 'var(--shadow-pink)';
                    });
                    
                    input.addEventListener('blur', () => {
                        input.parentElement.style.transform = 'translateY(0)';
                        input.parentElement.style.boxShadow = 'var(--shadow-soft)';
                    });
                });
            });
            
            // 10. Lazy Load Images with fade-in effect
            const images = document.querySelectorAll('img');
            images.forEach(img => {
                if (img.complete) {
                    img.classList.add('fade-in');
                } else {
                    img.addEventListener('load', () => {
                        img.classList.add('fade-in');
                    });
                }
            });
            
            // 11. Add floating shapes for visual interest
            function createFloatingShapes() {
                const footer = document.querySelector('.footer');
                for (let i = 0; i < 3; i++) {
                    const shape = document.createElement('div');
                    shape.className = 'floating-shape';
                    shape.style.width = `${Math.random() * 200 + 100}px`;
                    shape.style.height = shape.style.width;
                    shape.style.left = `${Math.random() * 100}%`;
                    shape.style.top = `${Math.random() * 100}%`;
                    shape.style.animationDelay = `${Math.random() * 5}s`;
                    shape.style.animationDuration = `${Math.random() * 10 + 10}s`;
                    footer.appendChild(shape);
                }
            }
            
            createFloatingShapes();
            
            // 12. Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    const href = this.getAttribute('href');
                    if (href === '#') return;
                    
                    e.preventDefault();
                    const targetElement = document.querySelector(href);
                    
                    if (targetElement) {
                        const headerOffset = 100;
                        const elementPosition = targetElement.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                        
                        window.scrollTo({
                            top: offsetPosition,
                            behavior: 'smooth'
                        });
                    }
                });
            });
            
        });
        
        // Add CSS for ripple animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes ripple {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
            
            @keyframes pulse {
                0% { transform: scale(1); }
                50% { transform: scale(1.05); }
                100% { transform: scale(1); }
            }
        `;
        document.head.appendChild(style);
        
    </script>
    
    @stack('scripts')
</body>
</html>