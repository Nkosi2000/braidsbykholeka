@extends('layouts.app')

@section('content')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h1 class="brand-font mb-4">Get in Touch</h1>
                <p class="lead mb-4">I'd love to discuss your next braiding style!</p>
                
                <!-- Contact Info -->
                <div class="mb-5">
                    <div class="d-flex align-items-start mb-4">
                        <div class="me-3">
                            <div class="bg-primary rounded-circle p-3">
                                <i class="fas fa-map-marker-alt text-white"></i>
                            </div>
                        </div>
                        <div>
                            <h5>Location</h5>
                            <p class="mb-0">123 Salon Street<br>Braidville, City 12345</p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-start mb-4">
                        <div class="me-3">
                            <div class="bg-primary rounded-circle p-3">
                                <i class="fas fa-phone text-white"></i>
                            </div>
                        </div>
                        <div>
                            <h5>Phone</h5>
                            <p class="mb-0">
                                <a href="tel:+1234567890" class="text-decoration-none">(123) 456-7890</a>
                            </p>
                            <small class="text-muted">Call or text to book</small>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-start mb-4">
                        <div class="me-3">
                            <div class="bg-primary rounded-circle p-3">
                                <i class="fas fa-clock text-white"></i>
                            </div>
                        </div>
                        <div>
                            <h5>Hours</h5>
                            <p class="mb-0">Tuesday - Saturday: 9AM - 6PM<br>Sunday & Monday: Closed</p>
                        </div>
                    </div>
                </div>
                
                <!-- Social Media -->
                <div>
                    <h5>Follow My Work</h5>
                    <div class="d-flex gap-3">
                        <a href="#" class="btn btn-outline-dark">Instagram</a>
                        <a href="#" class="btn btn-outline-dark">Facebook</a>
                        <a href="#" class="btn btn-outline-dark">TikTok</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="card shadow border-0">
                    <div class="card-body p-4 p-lg-5">
                        <h3 class="mb-4">Book an Appointment</h3>
                        
                        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                        
                        <form method="POST" action="/contact/submit" id="contactForm">
                            @csrf
                            
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name *</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email *</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Phone *</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" required>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="service" class="form-label">Service Interested In</label>
                                <select class="form-select" id="service" name="service">
                                    <option value="">Select a service</option>
                                    <option value="Knotless Braids">Knotless Braids</option>
                                    <option value="Box Braids">Box Braids</option>
                                    <option value="Cornrows">Cornrows</option>
                                    <option value="Goddess Braids">Goddess Braids</option>
                                    <option value="Consultation">Just a Consultation</option>
                                </select>
                            </div>
                            
                            <div class="mb-3">
                                <label for="message" class="form-label">Message *</label>
                                <textarea class="form-control" id="message" name="message" rows="4" 
                                          placeholder="Tell me about your hair length, previous styles, and any concerns..." required></textarea>
                            </div>
                            
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                            </div>
                            <p class="text-muted small mt-3">I'll respond within 24 hours to confirm your appointment.</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Google Map Embed (Optional) -->
<section class="py-0">
    <div class="container-fluid">
        <div class="ratio ratio-16x9">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.3456789012345!2d18.42345678901234!3d-33.98765432109876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzPCsDU5JzE1LjYiUyAxOMKwMjUnMjguNCJF!5e0!3m2!1sen!2sza!4v1234567890123!5m2!1sen!2sza" 
                    style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>
@endsection