{{-- resources/views/pages/contact.blade.php --}}
@extends('layouts.app')

@section('title', $title ?? 'Contact & Booking | Braids by Kholeka')

@section('content')
<section class="services-section fade-in">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h1 class="section-title text-start mb-4">Book Your Appointment</h1>
                <p class="mb-4">For inquiries and appointments, please fill out the form below. 
                I typically respond within 24 hours to schedule your consultation.</p>
                
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                
                <form action="{{ route('contact.store') }}" method="POST" id="contactForm">
                    @csrf
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="name" class="form-label">Full Name *</label>
                                <input type="text" class="form-control" id="name" name="name" 
                                       value="{{ old('name') }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="email" class="form-label">Email Address *</label>
                                <input type="email" class="form-control" id="email" name="email" 
                                       value="{{ old('email') }}" required>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group mb-3">
                        <label for="phone" class="form-label">Phone Number *</label>
                        <input type="tel" class="form-control" id="phone" name="phone" 
                               value="{{ old('phone') }}" required>
                    </div>
                    
                    <div class="form-group mb-3">
                        <label for="service_interest" class="form-label">Service Interested In</label>
                        <select class="form-control" id="service_interest" name="service_interest">
                            <option value="">Select a service</option>
                            <option value="Knotless Braids" {{ old('service_interest') == 'Knotless Braids' ? 'selected' : '' }}>
                                Knotless Braids
                            </option>
                            <option value="Box Braids" {{ old('service_interest') == 'Box Braids' ? 'selected' : '' }}>
                                Box Braids
                            </option>
                            <option value="Protective Styles" {{ old('service_interest') == 'Protective Styles' ? 'selected' : '' }}>
                                Protective Styles
                            </option>
                            <option value="Bespoke Design" {{ old('service_interest') == 'Bespoke Design' ? 'selected' : '' }}>
                                Bespoke Design
                            </option>
                            <option value="Consultation" {{ old('service_interest') == 'Consultation' ? 'selected' : '' }}>
                                Consultation Only
                            </option>
                        </select>
                    </div>
                    
                    <div class="form-group mb-3">
                        <label for="preferred_date" class="form-label">Preferred Appointment Date</label>
                        <input type="date" class="form-control" id="preferred_date" name="preferred_date" 
                               min="{{ date('Y-m-d') }}" value="{{ old('preferred_date') }}">
                    </div>
                    
                    <div class="form-group mb-4">
                        <label for="message" class="form-label">Tell me about your hair and what you're looking for *</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required>{{ old('message') }}</textarea>
                    </div>
                    
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" id="consent" name="consent" required>
                        <label class="form-check-label" for="consent">
                            I understand that a consultation is required for first-time clients and that all appointments are confirmed via phone call.
                        </label>
                    </div>
                    
                    <button type="submit" class="btn btn-reserve w-100 py-3">
                        <i class="bi bi-send me-2"></i> Send Booking Request
                    </button>
                </form>
            </div>
            
            <div class="col-lg-6">
                <div class="contact-info-card">
                    <h3 class="mb-4">Contact Information</h3>
                    
                    <div class="contact-item d-flex mb-4">
                        <div class="contact-icon me-3">
                            <i class="bi bi-geo-alt text-amethyst fs-4"></i>
                        </div>
                        <div>
                            <h5>Studio Location</h5>
                            <p class="mb-0">123 Luxury Lane, Braid District<br>
                            <small class="opacity-75">By appointment only</small></p>
                        </div>
                    </div>
                    
                    <div class="contact-item d-flex mb-4">
                        <div class="contact-icon me-3">
                            <i class="bi bi-telephone text-amethyst fs-4"></i>
                        </div>
                        <div>
                            <h5>Phone</h5>
                            <p class="mb-0">
                                <a href="tel:+1234567890" class="text-decoration-none">(123) 456-7890</a><br>
                                <small class="opacity-75">Text or call for urgent inquiries</small>
                            </p>
                        </div>
                    </div>
                    
                    <div class="contact-item d-flex mb-4">
                        <div class="contact-icon me-3">
                            <i class="bi bi-envelope text-amethyst fs-4"></i>
                        </div>
                        <div>
                            <h5>Email</h5>
                            <p class="mb-0">
                                <a href="mailto:reservations@braidsbykholeka.com" class="text-decoration-none">
                                    reservations@braidsbykholeka.com
                                </a><br>
                                <small class="opacity-75">Response within 24 hours</small>
                            </p>
                        </div>
                    </div>
                    
                    <div class="contact-item d-flex mb-4">
                        <div class="contact-icon me-3">
                            <i class="bi bi-clock text-amethyst fs-4"></i>
                        </div>
                        <div>
                            <h5>Hours of Operation</h5>
                            <div class="hours-list">
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Tue - Thu</span>
                                    <span>10:00 AM - 6:00 PM</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Fri - Sat</span>
                                    <span>9:00 AM - 7:00 PM</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Sunday</span>
                                    <span class="text-champagne">By Appointment</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span>Monday</span>
                                    <span class="opacity-75">Closed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-5">
                        <h5 class="mb-3">What to Expect</h5>
                        <ul class="expectation-list">
                            <li><i class="bi bi-check-circle text-amethyst me-2"></i> Consultation required for first-time clients</li>
                            <li><i class="bi bi-check-circle text-amethyst me-2"></i> Confirmation call within 24 hours</li>
                            <li><i class="bi bi-check-circle text-amethyst me-2"></i> Detailed quote provided after consultation</li>
                            <li><i class="bi bi-check-circle text-amethyst me-2"></i> Premium hair available for purchase</li>
                            <li><i class="bi bi-check-circle text-amethyst me-2"></i> Aftercare guidance included</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
.contact-info-card {
    background: var(--silk);
    padding: 2.5rem;
    border-radius: 12px;
    border: 1px solid rgba(138, 77, 118, 0.1);
    height: 100%;
}

.contact-icon {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(138, 77, 118, 0.1);
    border-radius: 50%;
}

.expectation-list {
    list-style: none;
    padding: 0;
}

.expectation-list li {
    margin-bottom: 0.8rem;
    font-size: 0.9rem;
}

.hours-list {
    width: 100%;
}

.form-control {
    background: var(--porcelain);
    border: 1px solid rgba(138, 77, 118, 0.2);
    border-radius: 4px;
    padding: 0.75rem;
    transition: var(--fast-transition);
}

.form-control:focus {
    border-color: var(--amethyst);
    box-shadow: 0 0 0 0.25rem rgba(138, 77, 118, 0.25);
}

.form-label {
    font-weight: 500;
    color: var(--velvet);
    margin-bottom: 0.5rem;
}

.alert {
    border-radius: 8px;
    border: none;
}
</style>
@endpush