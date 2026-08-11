{{-- resources/views/pages/contact.blade.php --}}
@extends('layouts.app')

@section('title', 'Contact & Booking | Luxury Braiding by Kholeka')

@section('content')
<!-- CONTACT HERO -->
<section class="contact-hero py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="hero-content">
                    <div class="badge bg-pink-soft text-pink fw-semibold px-3 py-2 rounded-pill mb-3 d-inline-block">
                        <i class="bi bi-calendar-check me-1"></i> Book Your Experience
                    </div>
                    
                    <h1 class="display-3 fw-bold mb-4">
                        Reserve Your<br>
                        <span class="text-gradient">Luxury Session</span>
                    </h1>
                    
                    <p class="lead mb-4">
                        Begin your journey to exquisite braiding artistry. Fill out the form below to 
                        request a consultation or appointment. I respond within 24 hours to discuss 
                        your vision and schedule your session.
                    </p>
                    
                    <!-- Trust Indicators -->
                    <div class="trust-indicators d-flex align-items-center">
                        <div class="d-flex me-3">
                            <div class="avatar-sm rounded-circle bg-pink text-white d-flex align-items-center justify-content-center me-1">
                                <i class="bi bi-check-lg"></i>
                            </div>
                            <div class="avatar-sm rounded-circle bg-pink text-white d-flex align-items-center justify-content-center me-1">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <div class="avatar-sm rounded-circle bg-pink text-white d-flex align-items-center justify-content-center">
                                <i class="bi bi-lock-fill"></i>
                            </div>
                        </div>
                        <div class="small text-muted">
                            Secure booking • Private consultation • Premium experience
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="contact-hero-image position-relative">
                    <!-- Decorative elements -->
                    <div class="contact-dot dot-1"></div>
                    <div class="contact-dot dot-2"></div>
                    <div class="contact-dot dot-3"></div>
                    
                    <!-- Contact Form Preview -->
                    <div class="form-preview-card bg-white rounded-4 p-4 shadow-lg">
                        <div class="preview-header mb-4">
                            <h4 class="fw-bold text-pink mb-2">Booking Request Form</h4>
                            <p class="small text-muted mb-0">Complete the form to begin your luxury braiding experience</p>
                        </div>
                        
                        <div class="preview-fields">
                            <div class="preview-field mb-3">
                                <div class="field-label small text-muted mb-1">Full Name</div>
                                <div class="field-preview bg-pink-soft rounded-2 p-2">Your Name</div>
                            </div>
                            
                            <div class="preview-field mb-3">
                                <div class="field-label small text-muted mb-1">Contact Details</div>
                                <div class="row g-2">
                                    <div class="col-6">
                                        <div class="field-preview bg-pink-soft rounded-2 p-2">Email</div>
                                    </div>
                                    <div class="col-6">
                                        <div class="field-preview bg-pink-soft rounded-2 p-2">Phone</div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="preview-field mb-4">
                                <div class="field-label small text-muted mb-1">Service Interest</div>
                                <div class="field-preview bg-pink-soft rounded-2 p-2">Select Style</div>
                            </div>
                            
                            <button class="btn btn-pink w-100 py-3">
                                <i class="bi bi-send me-2"></i> Submit Booking Request
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT & BOOKING SECTION -->
<section class="contact-booking py-5">
    <div class="container">
        <div class="row g-5">
            <!-- Booking Form -->
            <div class="col-lg-7">
                <div class="booking-card bg-white rounded-4 p-4 p-lg-5 shadow-sm">
                    <div class="form-header mb-4">
                        <h2 class="h3 fw-bold mb-2">Book Your Appointment</h2>
                        <p class="text-muted mb-0">All fields marked with * are required</p>
                    </div>
                    
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show d-flex align-items-center mb-4" role="alert">
                        <i class="bi bi-check-circle-fill fs-4 me-3"></i>
                        <div class="flex-grow-1">
                            <div class="fw-bold mb-1">Booking Request Sent!</div>
                            {{ session('success') }}
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    
                    @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center mb-4" role="alert">
                        <i class="bi bi-exclamation-triangle-fill fs-4 me-3"></i>
                        <div class="flex-grow-1">
                            <div class="fw-bold mb-1">Please correct the following:</div>
                            <ul class="mb-0 ps-3">
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    
                    <form action="{{ route('contact.store') }}" method="POST" id="contactForm" class="needs-validation" novalidate>
                        @csrf
                        
                        <!-- Personal Information -->
                        <div class="form-section mb-5">
                            <div class="section-header d-flex align-items-center mb-4">
                                <div class="section-icon bg-pink-soft text-pink rounded-circle d-flex align-items-center justify-content-center me-3">
                                    <i class="bi bi-person fs-5"></i>
                                </div>
                                <h4 class="h5 fw-bold mb-0">Personal Information</h4>
                            </div>
                            
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="name" 
                                               value="{{ old('name') }}" placeholder="John Doe" required>
                                        <label for="name">Full Name *</label>
                                        <div class="invalid-feedback">
                                            Please enter your full name.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email" 
                                               value="{{ old('email') }}" placeholder="name@example.com" required>
                                        <label for="email">Email Address *</label>
                                        <div class="invalid-feedback">
                                            Please enter a valid email address.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="tel" class="form-control" id="phone" name="phone" 
                                               value="{{ old('phone') }}" placeholder="+27 82 123 4567" required>
                                        <label for="phone">Phone Number *</label>
                                        <div class="invalid-feedback">
                                            Please enter your phone number.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="instagram" name="instagram" 
                                               value="{{ old('instagram') }}" placeholder="@username">
                                        <label for="instagram">Instagram Handle (Optional)</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Service Details -->
                        <div class="form-section mb-5">
                            <div class="section-header d-flex align-items-center mb-4">
                                <div class="section-icon bg-pink-soft text-pink rounded-circle d-flex align-items-center justify-content-center me-3">
                                    <i class="bi bi-scissors fs-5"></i>
                                </div>
                                <h4 class="h5 fw-bold mb-0">Service Details</h4>
                            </div>
                            
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" id="service_interest" name="service_interest">
                                            <option value="">Select a service</option>
                                            <option value="Knotless Braids" {{ old('service_interest') == 'Knotless Braids' ? 'selected' : '' }}>
                                                Knotless Braids
                                            </option>
                                            <option value="Box Braids" {{ old('service_interest') == 'Box Braids' ? 'selected' : '' }}>
                                                Box Braids
                                            </option>
                                            <option value="Goddess Braids" {{ old('service_interest') == 'Goddess Braids' ? 'selected' : '' }}>
                                                Goddess Braids
                                            </option>
                                            <option value="Cornrows" {{ old('service_interest') == 'Cornrows' ? 'selected' : '' }}>
                                                Cornrows
                                            </option>
                                            <option value="Faux Locs" {{ old('service_interest') == 'Faux Locs' ? 'selected' : '' }}>
                                                Faux Locs
                                            </option>
                                            <option value="Twists" {{ old('service_interest') == 'Twists' ? 'selected' : '' }}>
                                                Twists
                                            </option>
                                            <option value="Bespoke Design" {{ old('service_interest') == 'Bespoke Design' ? 'selected' : '' }}>
                                                Bespoke Design
                                            </option>
                                            <option value="Consultation" {{ old('service_interest') == 'Consultation' ? 'selected' : '' }}>
                                                Consultation Only
                                            </option>
                                        </select>
                                        <label for="service_interest">Service Interested In</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" id="preferred_date" name="preferred_date" 
                                               min="{{ date('Y-m-d', strtotime('+2 days')) }}" 
                                               value="{{ old('preferred_date') }}">
                                        <label for="preferred_date">Preferred Date</label>
                                        <div class="form-text small">
                                            Select a date at least 2 days from now
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Hair Details -->
                            <div class="mt-4">
                                <label class="form-label fw-semibold mb-3">Tell me about your hair:</label>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-select" id="hair_length" name="hair_length">
                                                <option value="">Select length</option>
                                                <option value="Short (Ear length)" {{ old('hair_length') == 'Short (Ear length)' ? 'selected' : '' }}>
                                                    Short (Ear length)
                                                </option>
                                                <option value="Medium (Shoulder length)" {{ old('hair_length') == 'Medium (Shoulder length)' ? 'selected' : '' }}>
                                                    Medium (Shoulder length)
                                                </option>
                                                <option value="Long (Mid-back)" {{ old('hair_length') == 'Long (Mid-back)' ? 'selected' : '' }}>
                                                    Long (Mid-back)
                                                </option>
                                                <option value="Extra Long (Waist length+)" {{ old('hair_length') == 'Extra Long (Waist length+)' ? 'selected' : '' }}>
                                                    Extra Long (Waist length+)
                                                </option>
                                            </select>
                                            <label for="hair_length">Current Hair Length</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-select" id="hair_density" name="hair_density">
                                                <option value="">Select density</option>
                                                <option value="Fine" {{ old('hair_density') == 'Fine' ? 'selected' : '' }}>
                                                    Fine
                                                </option>
                                                <option value="Medium" {{ old('hair_density') == 'Medium' ? 'selected' : '' }}>
                                                    Medium
                                                </option>
                                                <option value="Thick" {{ old('hair_density') == 'Thick' ? 'selected' : '' }}>
                                                    Thick
                                                </option>
                                                <option value="Very Thick" {{ old('hair_density') == 'Very Thick' ? 'selected' : '' }}>
                                                    Very Thick
                                                </option>
                                            </select>
                                            <label for="hair_density">Hair Density</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Project Details -->
                        <div class="form-section mb-5">
                            <div class="section-header d-flex align-items-center mb-4">
                                <div class="section-icon bg-pink-soft text-pink rounded-circle d-flex align-items-center justify-content-center me-3">
                                    <i class="bi bi-chat-left-text fs-5"></i>
                                </div>
                                <h4 class="h5 fw-bold mb-0">Project Details</h4>
                            </div>
                            
                            <div class="form-floating mb-4">
                                <textarea class="form-control" id="message" name="message" 
                                          placeholder="Tell me about your vision..." 
                                          style="height: 150px;" required>{{ old('message') }}</textarea>
                                <label for="message">Describe your vision and expectations *</label>
                                <div class="form-text small">
                                    Include any reference images, specific styles you like, or special requests.
                                </div>
                                <div class="invalid-feedback">
                                    Please tell me about your vision for the style.
                                </div>
                            </div>
                            
                            <!-- Reference Image Upload -->
                            <div class="reference-upload mb-4">
                                <label class="form-label fw-semibold">Reference Images (Optional)</label>
                                <div class="upload-area border rounded-3 p-4 text-center bg-pink-soft">
                                    <i class="bi bi-cloud-arrow-up fs-1 text-pink mb-3 d-block"></i>
                                    <p class="small mb-2">Drag & drop or click to upload reference images</p>
                                    <p class="x-small text-muted mb-0">Max file size: 5MB • Formats: JPG, PNG, GIF</p>
                                    <input type="file" class="d-none" id="reference_images" name="reference_images[]" multiple accept="image/*">
                                    <button type="button" class="btn btn-sm btn-outline-pink mt-3" onclick="document.getElementById('reference_images').click();">
                                        <i class="bi bi-upload me-1"></i> Upload Images
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Consent & Submission -->
                        <div class="form-section mb-5">
                            <div class="consent-box p-4 bg-pink-soft rounded-4 mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="consent" name="consent" required>
                                    <label class="form-check-label" for="consent">
                                        <span class="fw-semibold">I understand and agree to the following:</span>
                                        <ul class="small mt-2 mb-0">
                                            <li>A consultation is required for first-time clients</li>
                                            <li>All appointments are confirmed via phone call</li>
                                            <li>Deposit may be required to secure booking</li>
                                            <li>Cancellation policy requires 48-hour notice</li>
                                        </ul>
                                    </label>
                                    <div class="invalid-feedback">
                                        You must agree to the terms before submitting.
                                    </div>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-pink btn-lg w-100 py-3">
                                <i class="bi bi-send fs-5 me-2"></i>
                                Submit Booking Request
                            </button>
                            
                            <p class="small text-center text-muted mt-3 mb-0">
                                <i class="bi bi-clock me-1"></i>
                                You'll receive a response within 24 hours
                            </p>
                        </div>
                    </form>
                </div>
            </div>
            
            <!-- Contact Information -->
            <div class="col-lg-5">
                <div class="contact-info-sticky">
                    <div class="contact-info-card bg-white rounded-4 p-4 shadow-sm mb-4">
                        <div class="card-header d-flex align-items-center mb-4">
                            <div class="header-icon bg-pink text-white rounded-circle d-flex align-items-center justify-content-center me-3">
                                <i class="bi bi-info-circle fs-5"></i>
                            </div>
                            <h3 class="h5 fw-bold mb-0">Contact Information</h3>
                        </div>
                        
                        <div class="contact-items">
                            <!-- Studio -->
                            <div class="contact-item d-flex align-items-start mb-4">
                                <div class="item-icon bg-pink-soft text-pink rounded-circle p-2 me-3">
                                    <i class="bi bi-geo-alt fs-5"></i>
                                </div>
                                <div>
                                    <h5 class="h6 fw-bold mb-1">Studio Location</h5>
                                    <p class="mb-1">Luxury Braiding Studio</p>
                                    <p class="small text-muted mb-0">
                                        123 Artistry Lane, Braid District<br>
                                        <span class="text-pink">By appointment only</span>
                                    </p>
                                </div>
                            </div>
                            
                            <!-- Phone -->
                            <div class="contact-item d-flex align-items-start mb-4">
                                <div class="item-icon bg-pink-soft text-pink rounded-circle p-2 me-3">
                                    <i class="bi bi-telephone fs-5"></i>
                                </div>
                                <div>
                                    <h5 class="h6 fw-bold mb-1">Phone</h5>
                                    <p class="mb-1">
                                        <a href="tel:+27821234567" class="text-decoration-none text-pink fw-semibold">
                                            +27 82 123 4567
                                        </a>
                                    </p>
                                    <p class="small text-muted mb-0">
                                        <i class="bi bi-chat-left-text me-1"></i>
                                        Text or call for urgent inquiries
                                    </p>
                                </div>
                            </div>
                            
                            <!-- Email -->
                            <div class="contact-item d-flex align-items-start mb-4">
                                <div class="item-icon bg-pink-soft text-pink rounded-circle p-2 me-3">
                                    <i class="bi bi-envelope fs-5"></i>
                                </div>
                                <div>
                                    <h5 class="h6 fw-bold mb-1">Email</h5>
                                    <p class="mb-1">
                                        <a href="mailto:hello@braidsbykholeka.com" class="text-decoration-none text-pink fw-semibold">
                                            hello@braidsbykholeka.com
                                        </a>
                                    </p>
                                    <p class="small text-muted mb-0">
                                        <i class="bi bi-clock me-1"></i>
                                        Response within 24 hours
                                    </p>
                                </div>
                            </div>
                            
                            <!-- Hours -->
                            <div class="contact-item d-flex align-items-start">
                                <div class="item-icon bg-pink-soft text-pink rounded-circle p-2 me-3">
                                    <i class="bi bi-clock fs-5"></i>
                                </div>
                                <div>
                                    <h5 class="h6 fw-bold mb-1">Hours of Operation</h5>
                                    <div class="hours-table small">
                                        <div class="d-flex justify-content-between mb-2">
                                            <span class="fw-semibold">Tuesday - Thursday</span>
                                            <span>10:00 AM - 6:00 PM</span>
                                        </div>
                                        <div class="d-flex justify-content-between mb-2">
                                            <span class="fw-semibold">Friday - Saturday</span>
                                            <span>9:00 AM - 7:00 PM</span>
                                        </div>
                                        <div class="d-flex justify-content-between mb-2">
                                            <span class="fw-semibold">Sunday</span>
                                            <span class="text-pink">By Appointment</span>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <span class="fw-semibold">Monday</span>
                                            <span class="text-muted">Studio Closed</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- What to Expect -->
                    <div class="expectations-card bg-pink-soft rounded-4 p-4">
                        <h4 class="h5 fw-bold mb-4">What to Expect</h4>
                        <div class="expectation-items">
                            <div class="expectation-item d-flex align-items-start mb-3">
                                <div class="expect-icon bg-white text-pink rounded-circle d-flex align-items-center justify-content-center me-3">
                                    <i class="bi bi-check-lg"></i>
                                </div>
                                <div>
                                    <h6 class="small fw-bold mb-1">Personal Consultation</h6>
                                    <p class="x-small text-muted mb-0">Detailed discussion about your desired style and hair assessment</p>
                                </div>
                            </div>
                            
                            <div class="expectation-item d-flex align-items-start mb-3">
                                <div class="expect-icon bg-white text-pink rounded-circle d-flex align-items-center justify-content-center me-3">
                                    <i class="bi bi-check-lg"></i>
                                </div>
                                <div>
                                    <h6 class="small fw-bold mb-1">Transparent Pricing</h6>
                                    <p class="x-small text-muted mb-0">Clear quote based on style complexity, hair length, and density</p>
                                </div>
                            </div>
                            
                            <div class="expectation-item d-flex align-items-start mb-3">
                                <div class="expect-icon bg-white text-pink rounded-circle d-flex align-items-center justify-content-center me-3">
                                    <i class="bi bi-check-lg"></i>
                                </div>
                                <div>
                                    <h6 class="small fw-bold mb-1">Premium Materials</h6>
                                    <p class="x-small text-muted mb-0">High-quality, ethically-sourced hair extensions available</p>
                                </div>
                            </div>
                            
                            <div class="expectation-item d-flex align-items-start">
                                <div class="expect-icon bg-white text-pink rounded-circle d-flex align-items-center justify-content-center me-3">
                                    <i class="bi bi-check-lg"></i>
                                </div>
                                <div>
                                    <h6 class="small fw-bold mb-1">Aftercare Guidance</h6>
                                    <p class="x-small text-muted mb-0">Complete maintenance instructions for lasting beauty</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MAP & DIRECTIONS -->
<section class="map-section py-5 bg-pink-soft">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold mb-3">Find Our Studio</h2>
            <p class="lead text-muted max-w-2xl mx-auto">
                Located in a serene, private studio designed for your comfort and relaxation.
            </p>
        </div>
        
        <div class="map-container rounded-4 overflow-hidden shadow-lg">
            <!-- Placeholder for Google Map -->
            <div class="map-placeholder bg-white d-flex align-items-center justify-content-center" style="height: 400px;">
                <div class="text-center p-5">
                    <i class="bi bi-geo-alt fs-1 text-pink mb-3 d-block"></i>
                    <h4 class="h5 fw-bold mb-2">Luxury Braiding Studio</h4>
                    <p class="text-muted mb-0">
                        123 Artistry Lane, Braid District<br>
                        <span class="small">Exact address provided upon booking confirmation</span>
                    </p>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-4">
            <a href="#" class="btn btn-outline-pink">
                <i class="bi bi-download me-2"></i> Download Directions PDF
            </a>
        </div>
    </div>
</section>

<!-- FINAL CTA -->
<section class="contact-cta py-5">
    <div class="container">
        <div class="cta-card bg-gradient-pink rounded-4 p-5 text-center text-white position-relative overflow-hidden">
            <!-- Decorative elements -->
            <div class="cta-circle circle-1"></div>
            <div class="cta-circle circle-2"></div>
            
            <div class="position-relative" style="z-index: 2;">
                <h2 class="display-5 fw-bold mb-3">Still Have Questions?</h2>
                <p class="lead mb-4 opacity-90">
                    Don't hesitate to reach out. I'm here to help you create the perfect style.
                </p>
                
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                    <a href="tel:+27821234567" class="btn btn-light btn-lg px-4 py-3 text-pink fw-bold">
                        <i class="bi bi-telephone fs-5 me-2"></i>
                        Call Now
                    </a>
                    <a href="mailto:hello@braidsbykholeka.com" class="btn btn-outline-light btn-lg px-4 py-3">
                        <i class="bi bi-envelope fs-5 me-2"></i>
                        Email Me
                    </a>
                </div>
                
                <div class="mt-4 pt-2">
                    <p class="small opacity-75 mb-0">
                        <i class="bi bi-clock me-1"></i>
                        Available Tuesday - Saturday, 9 AM - 7 PM
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
    
    /* Contact Hero */
    .contact-hero {
        background: linear-gradient(135deg, #fef5f9 0%, #fcf9fa 100%);
        border-bottom: 1px solid rgba(212, 86, 135, 0.1);
    }
    
    .avatar-sm {
        width: 28px;
        height: 28px;
        font-size: 0.8rem;
    }
    
    /* Contact Hero Image */
    .contact-hero-image {
        padding: 20px;
    }
    
    .contact-dot {
        position: absolute;
        border-radius: 50%;
        background: rgba(212, 86, 135, 0.05);
        z-index: 0;
    }
    
    .contact-dot.dot-1 {
        width: 100px;
        height: 100px;
        top: 10px;
        right: 40px;
    }
    
    .contact-dot.dot-2 {
        width: 60px;
        height: 60px;
        bottom: 40px;
        left: 20px;
        background: rgba(232, 117, 163, 0.05);
    }
    
    .contact-dot.dot-3 {
        width: 40px;
        height: 40px;
        top: 40%;
        right: 10%;
        background: rgba(212, 86, 135, 0.08);
    }
    
    .form-preview-card {
        position: relative;
        z-index: 2;
        max-width: 450px;
        margin: 0 auto;
    }
    
    .field-preview {
        min-height: 44px;
        background: linear-gradient(90deg, rgba(212, 86, 135, 0.1) 0%, rgba(232, 117, 163, 0.1) 100%);
    }
    
    /* Booking Card */
    .booking-card {
        border: 2px solid rgba(212, 86, 135, 0.1);
        height: 100%;
    }
    
    .form-section {
        padding-bottom: 2rem;
        border-bottom: 1px solid rgba(212, 86, 135, 0.1);
    }
    
    .form-section:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }
    
    .section-icon {
        width: 40px;
        height: 40px;
    }
    
    /* Form Styling */
    .form-floating > .form-control,
    .form-floating > .form-select {
        height: calc(3.5rem + 2px);
        line-height: 1.25;
    }
    
    .form-floating > label {
        color: #666;
        padding: 1rem 0.75rem;
    }
    
    .form-control, .form-select {
        border: 1px solid rgba(212, 86, 135, 0.2);
        border-radius: 0.5rem;
        padding: 1rem 0.75rem;
        transition: all 0.3s ease;
    }
    
    .form-control:focus, .form-select:focus {
        border-color: var(--pink);
        box-shadow: 0 0 0 0.25rem rgba(212, 86, 135, 0.25);
    }
    
    .form-control.is-invalid, .form-select.is-invalid {
        border-color: #dc3545;
    }
    
    .upload-area {
        border: 2px dashed rgba(212, 86, 135, 0.3);
        transition: all 0.3s ease;
        cursor: pointer;
    }
    
    .upload-area:hover {
        border-color: var(--pink);
        background: rgba(212, 86, 135, 0.05);
    }
    
    .consent-box {
        border: 1px solid rgba(212, 86, 135, 0.2);
    }
    
    .form-check-input:checked {
        background-color: var(--pink);
        border-color: var(--pink);
    }
    
    .form-check-input:focus {
        border-color: var(--pink);
        box-shadow: 0 0 0 0.25rem rgba(212, 86, 135, 0.25);
    }
    
    /* Contact Info Card */
    .contact-info-sticky {
        position: sticky;
        top: 2rem;
    }
    
    .contact-info-card {
        border: 2px solid rgba(212, 86, 135, 0.1);
        height: 100%;
    }
    
    .header-icon {
        width: 40px;
        height: 40px;
    }
    
    .item-icon {
        width: 44px;
        height: 44px;
        flex-shrink: 0;
    }
    
    .hours-table span {
        font-size: 0.9rem;
    }
    
    /* Expectations */
    .expect-icon {
        width: 24px;
        height: 24px;
        font-size: 0.8rem;
        flex-shrink: 0;
    }
    
    .x-small {
        font-size: 0.75rem;
    }
    
    /* Map Section */
    .map-section {
        border-top: 1px solid rgba(212, 86, 135, 0.1);
        border-bottom: 1px solid rgba(212, 86, 135, 0.1);
    }
    
    .map-placeholder {
        background: linear-gradient(135deg, rgba(212, 86, 135, 0.05) 0%, rgba(232, 117, 163, 0.05) 100%);
    }
    
    /* CTA Section */
    .contact-cta {
        background: #fef5f9;
    }
    
    .cta-circle {
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.1);
        z-index: 1;
    }
    
    .cta-circle.circle-1 {
        width: 150px;
        height: 150px;
        top: -50px;
        left: -50px;
    }
    
    .cta-circle.circle-2 {
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
        
        .form-preview-card {
            max-width: 400px;
        }
    }
    
    @media (max-width: 991px) {
        .display-3 {
            font-size: 2.2rem;
        }
        
        .contact-hero-image {
            padding: 40px 0 0 0;
        }
        
        .contact-dot {
            display: none;
        }
        
        .contact-info-sticky {
            position: static;
            margin-top: 2rem;
        }
    }
    
    @media (max-width: 768px) {
        .display-3 {
            font-size: 2rem;
        }
        
        .display-5 {
            font-size: 1.8rem;
        }
        
        .booking-card,
        .contact-info-card {
            padding: 1.5rem !important;
        }
        
        .form-preview-card {
            max-width: 100%;
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
        
        .contact-hero-image {
            padding: 20px 0 0 0;
        }
        
        .form-section {
            padding-bottom: 1.5rem;
        }
        
        .consent-box {
            padding: 1.5rem !important;
        }
        
        .cta-card {
            padding: 2rem !important;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Form validation
    const form = document.getElementById('contactForm');
    const phoneInput = document.getElementById('phone');
    
    // Phone number formatting
    phoneInput.addEventListener('input', function(e) {
        let value = e.target.value.replace(/\D/g, '');
        if (value.length > 0) {
            if (value.length <= 2) {
                value = '+27 ' + value;
            } else if (value.length <= 4) {
                value = '+27 ' + value.substring(0, 2) + ' ' + value.substring(2);
            } else if (value.length <= 7) {
                value = '+27 ' + value.substring(0, 2) + ' ' + value.substring(2, 5) + ' ' + value.substring(5);
            } else {
                value = '+27 ' + value.substring(0, 2) + ' ' + value.substring(2, 5) + ' ' + value.substring(5, 8) + ' ' + value.substring(8, 11);
            }
        }
        e.target.value = value;
    });
    
    // Form validation
    form.addEventListener('submit', function(event) {
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        }
        
        form.classList.add('was-validated');
        
        // Check consent
        const consentCheckbox = document.getElementById('consent');
        if (!consentCheckbox.checked) {
            consentCheckbox.classList.add('is-invalid');
            event.preventDefault();
        }
    });
    
    // Consent checkbox validation
    document.getElementById('consent').addEventListener('change', function() {
        if (this.checked) {
            this.classList.remove('is-invalid');
        }
    });
    
    // Date picker min date
    const dateInput = document.getElementById('preferred_date');
    const today = new Date();
    const minDate = new Date(today);
    minDate.setDate(today.getDate() + 2);
    
    // Format to YYYY-MM-DD
    const minDateString = minDate.toISOString().split('T')[0];
    dateInput.min = minDateString;
    
    // Set default date to minDate if empty
    if (!dateInput.value) {
        dateInput.value = minDateString;
    }
    
    // File upload preview
    const fileInput = document.getElementById('reference_images');
    const uploadArea = document.querySelector('.upload-area');
    
    uploadArea.addEventListener('click', function() {
        fileInput.click();
    });
    
    uploadArea.addEventListener('dragover', function(e) {
        e.preventDefault();
        this.style.borderColor = 'var(--pink)';
        this.style.backgroundColor = 'rgba(212, 86, 135, 0.1)';
    });
    
    uploadArea.addEventListener('dragleave', function(e) {
        e.preventDefault();
        this.style.borderColor = 'rgba(212, 86, 135, 0.3)';
        this.style.backgroundColor = '';
    });
    
    uploadArea.addEventListener('drop', function(e) {
        e.preventDefault();
        this.style.borderColor = 'rgba(212, 86, 135, 0.3)';
        this.style.backgroundColor = '';
        
        if (e.dataTransfer.files.length) {
            fileInput.files = e.dataTransfer.files;
            showFilePreview(e.dataTransfer.files);
        }
    });
    
    fileInput.addEventListener('change', function(e) {
        if (e.target.files.length) {
            showFilePreview(e.target.files);
        }
    });
    
    function showFilePreview(files) {
        const uploadText = uploadArea.querySelector('p');
        const icon = uploadArea.querySelector('i');
        
        if (files.length === 1) {
            uploadText.textContent = files[0].name;
            icon.className = 'bi bi-file-image fs-1 text-pink mb-3 d-block';
        } else {
            uploadText.textContent = files.length + ' files selected';
            icon.className = 'bi bi-files fs-1 text-pink mb-3 d-block';
        }
        
        uploadArea.classList.add('bg-white');
    }
    
    // Auto-select service from URL parameter
    const urlParams = new URLSearchParams(window.location.search);
    const serviceParam = urlParams.get('service');
    if (serviceParam) {
        const serviceSelect = document.getElementById('service_interest');
        for (let i = 0; i < serviceSelect.options.length; i++) {
            if (serviceSelect.options[i].text === serviceParam) {
                serviceSelect.selectedIndex = i;
                break;
            }
        }
    }
    
    // Load selected service from sessionStorage
    const selectedService = sessionStorage.getItem('selectedService');
    if (selectedService) {
        const serviceSelect = document.getElementById('service_interest');
        for (let i = 0; i < serviceSelect.options.length; i++) {
            if (serviceSelect.options[i].text === selectedService) {
                serviceSelect.selectedIndex = i;
                break;
            }
        }
        sessionStorage.removeItem('selectedService');
    }
});
</script>
@endsection