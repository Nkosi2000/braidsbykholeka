@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="display-4 fw-bold mb-4">Beautiful Braids, Crafted with Passion</h1>
                    <p class="lead mb-4">Specializing in knotless braids, protective styles, and custom braiding for all hair types.</p>
                    <div class="d-flex flex-column flex-md-row justify-content-center gap-3">
                        <a href="/portfolio" class="btn btn-primary btn-lg">View My Work</a>
                        <a href="tel:+1234567890" class="btn btn-outline-light btn-lg">Call to Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Styles -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="brand-font">Featured Styles</h2>
                <p class="text-muted">Some of my recent work</p>
            </div>
            <div class="row g-4">
                @foreach($featuredStyles as $style)
                <div class="col-md-4">
                    <div class="portfolio-image">
                        <img src="{{ asset('images/' . $style['image']) }}" 
                             alt="{{ $style['title'] }}" 
                             class="img-fluid rounded shadow"
                             style="height: 300px; width: 100%; object-fit: cover;">
                        <div class="text-center mt-3">
                            <h5>{{ $style['title'] }}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center mt-5">
                <a href="/portfolio" class="btn btn-outline-primary">View Full Portfolio</a>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h3>Ready for Your New Look?</h3>
                    <p class="mb-0">Book your appointment today. Limited slots available each week.</p>
                </div>
                <div class="col-md-4 text-center text-md-end">
                    <a href="tel:+1234567890" class="btn btn-primary btn-lg">📞 Call Now</a>
                </div>
            </div>
        </div>
    </section>
@endsection