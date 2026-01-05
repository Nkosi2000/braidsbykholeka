@extends('layouts.app')

@section('content')
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="brand-font mb-3">Services & Prices</h1>
            <p class="lead">All services include consultation and aftercare advice</p>
        </div>

        <div class="row g-4">
            @foreach($services as $service)
            <div class="col-md-6 col-lg-4">
                {{-- Change: $service['popular'] to $service->is_popular --}}
                <div class="card h-100 border-0 shadow-sm {{ $service->is_popular ? 'border-primary border-2' : '' }}">
                    {{-- Change: $service['popular'] to $service->is_popular --}}
                    @if($service->is_popular)
                    <div class="position-absolute top-0 end-0 m-3">
                        <span class="badge bg-primary">Most Popular</span>
                    </div>
                    @endif
                    <div class="card-body">
                        {{-- Change: $service['name'] to $service->name --}}
                        <h4 class="card-title">{{ $service->name }}</h4>
                        {{-- Change: Format the price from the database --}}
                        <h3 class="text-primary my-3">{{ $service->price_note }} ${{ number_format($service->price, 2) }}</h3>
                        {{-- Change: $service['description'] to $service->description --}}
                        <p class="card-text">{{ $service->description }}</p>
                        <div class="mt-3">
                            {{-- Change: $service['duration'] to $service->duration --}}
                            <small class="text-muted">⏱️ {{ $service->duration }}</small>
                        </div>
                    </div>
                    <div class="card-footer bg-white border-0">
                        {{-- Change: $service['name'] to $service->name --}}
                        <a href="/contact?service={{ urlencode($service->name) }}" 
                           class="btn {{ $service->is_popular ? 'btn-primary' : 'btn-outline-primary' }} w-100">
                            Inquire About This Service
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pricing Note -->
        <div class="alert alert-info mt-5">
            <h5>📝 Important Notes:</h5>
            <ul class="mb-0">
                <li>Prices are starting points and may vary based on hair length, thickness, and style complexity</li>
                <li>Deposit required to secure appointment</li>
                <li>Please arrive with clean, dry, and detangled hair</li>
                <li>Hair extensions available for purchase</li>
            </ul>
        </div>
    </div>
</section>
@endsection