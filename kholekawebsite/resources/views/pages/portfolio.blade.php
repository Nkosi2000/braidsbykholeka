@extends('layouts.app')

@section('content')
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="brand-font">My Work</h1>
            <p class="lead">Browse through my braiding portfolio</p>
            
            <!-- Simple Filter (optional, can be enhanced with JS) -->
            <div class="btn-group mt-3" role="group">
                <a href="/portfolio" class="btn btn-outline-primary">All</a>
                <a href="#" class="btn btn-outline-primary" data-filter="knotless">Knotless</a>
                <a href="#" class="btn btn-outline-primary" data-filter="box-braids">Box Braids</a>
                <a href="#" class="btn btn-outline-primary" data-filter="cornrows">Cornrows</a>
                <a href="#" class="btn btn-outline-primary" data-filter="goddess">Goddess</a>
            </div>
        </div>

        <div class="row g-4" id="portfolio-grid">
            @forelse($portfolioItems as $item)
            <div class="col-md-6 col-lg-4 portfolio-item" data-category="{{ $item->category }}">
                <div class="portfolio-image shadow">
                    <img src="{{ asset('images/' . $item->image_path) }}" 
                         alt="{{ $item->title }}" 
                         class="img-fluid w-100"
                         style="height: 350px; object-fit: cover;">
                    <div class="p-3">
                        <h5 class="mb-0">{{ $item->title }}</h5>
                        @if($item->description)
                        <p class="text-muted small mt-2">{{ $item->description }}</p>
                        @endif
                    </div>
                </div>
            </div>
            @empty
            <!-- Show this message when no portfolio items exist -->
            <div class="col-12 text-center py-5">
                <div class="alert alert-info">
                    <h4>Portfolio coming soon!</h4>
                    <p class="mb-0">Kholeka is updating her portfolio with new images. Check back soon!</p>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
// Simple JavaScript for filtering (optional enhancement)
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('[data-filter]');
    const portfolioItems = document.querySelectorAll('.portfolio-item');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const filter = this.getAttribute('data-filter');
            
            // Update active button
            filterButtons.forEach(btn => {
                btn.classList.remove('active');
            });
            this.classList.add('active');
            
            // Show/hide items based on filter
            portfolioItems.forEach(item => {
                if (filter === 'all' || item.getAttribute('data-category') === filter) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});
</script>
@endpush