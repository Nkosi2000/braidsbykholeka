@extends('layouts.app')

@section('content')
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <!-- Placeholder for Kholeka's photo -->
                <div class="rounded-circle overflow-hidden mx-auto" style="width: 350px; height: 350px;">
                    <img src="https://via.placeholder.com/350x350/8a4d76/ffffff?text=Kholeka+Photo" 
                         alt="Kholeka - Professional Braider"
                         class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6">
                <h1 class="brand-font mb-4">Hi, I'm Kholeka</h1>
                <p class="lead mb-4">{{ $aboutContent['bio'] }}</p>
                
                <div class="mb-4">
                    <h5>What I Believe In:</h5>
                    <ul class="list-unstyled">
                        @foreach($aboutContent['values'] as $value)
                        <li class="mb-2">✓ {{ $value }}</li>
                        @endforeach
                    </ul>
                </div>
                
                <div class="bg-light p-4 rounded">
                    <h5>My Experience</h5>
                    <div class="d-flex align-items-center">
                        <div class="display-4 text-primary me-3">{{ $aboutContent['experience'] }}</div>
                        <div>Years of professional braiding experience</div>
                    </div>
                </div>
                
                <div class="mt-5">
                    <a href="/contact" class="btn btn-primary me-3">Book a Consultation</a>
                    <a href="/portfolio" class="btn btn-outline-primary">See My Work</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection