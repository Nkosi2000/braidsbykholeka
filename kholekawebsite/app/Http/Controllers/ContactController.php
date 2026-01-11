<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact', [
            'title' => 'Contact & Book Appointment | Braids by Kholeka'
        ]);
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'service_interest' => 'nullable|string',
            'preferred_date' => 'nullable|date',
            'message' => 'required|string|min:10|max:1000'
        ]);
        
        // You can store in database if needed
        // $inquiry = Inquiry::create($validated);
        
        // Send email notification
        try {
            Mail::to('reservations@braidsbykholeka.com')
                ->send(new ContactFormSubmitted($validated));
                
            return redirect()->route('contact')
                           ->with('success', 'Thank you! Your appointment request has been sent. We\'ll contact you within 24 hours.');
        } catch (\Exception $e) {
            return back()->with('error', 'Sorry, there was an error sending your message. Please try again or call us directly.');
        }
    }
}