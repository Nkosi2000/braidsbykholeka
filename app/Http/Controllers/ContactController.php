<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormSubmitted;
use App\Models\Inquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

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

        $inquiry = Inquiry::create($validated);

        // Email notification is best-effort: the inquiry is already saved,
        // so a mail failure shouldn't block the client from seeing success.
        try {
            Mail::to(config('mail.booking_notifications_to', config('mail.from.address')))
                ->send(new ContactFormSubmitted($validated));
        } catch (\Exception $e) {
            Log::error('Failed to send contact form notification email', [
                'inquiry_id' => $inquiry->id,
                'error' => $e->getMessage(),
            ]);
        }

        return redirect()->route('contact')
                       ->with('success', 'Thank you! Your appointment request has been sent. We\'ll contact you within 24 hours.');
    }
}