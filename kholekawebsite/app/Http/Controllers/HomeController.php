<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortfolioItem;

class HomeController extends Controller
{
    public function index()
    {
        // Get featured portfolio items
        $featuredStyles = PortfolioItem::where('is_featured', true)
                                      ->orderBy('sort_order')
                                      ->take(6)
                                      ->get();
        
        return view('pages.home', [
            'title' => 'Braids by Kholeka | Exclusive Hair Artistry',
            'featuredStyles' => $featuredStyles
        ]);
    }
    
    public function about()
    {
        return view('pages.about', [
            'title' => 'About Kholeka | Hair Artistry & Expertise',
            'aboutContent' => $this->getAboutContent()
        ]);
    }
    
    public function portfolio()
    {
        // Get all portfolio items grouped by category
        $portfolioItems = PortfolioItem::orderBy('sort_order')->get();
        
        // Get unique categories for filtering
        $categories = PortfolioItem::distinct('category')->pluck('category');
        
        return view('pages.portfolio', [
            'title' => 'Portfolio | Masterful Braiding Artistry',
            'portfolioItems' => $portfolioItems,
            'categories' => $categories
        ]);
    }
    
    public function contact()
    {
        return view('pages.contact', [
            'title' => 'Contact & Booking | Schedule Your Appointment'
        ]);
    }
    
    public function submitContact(Request $request)
    {
        // Validation
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'service' => 'nullable|string',
            'preferred_date' => 'nullable|date',
            'message' => 'required|string|min:10'
        ]);
        
        // In production, you'd send an email here
        // Mail::to('reservations@braidsbykholeka.com')->send(new ContactForm($validated));
        
        return back()->with([
            'success' => 'Thank you for your inquiry! I\'ll contact you within 24 hours to confirm your appointment.',
            'form_data' => $validated // Optional: keep form data if you want to show it
        ]);
    }
    
    private function getAboutContent()
    {
        return [
            'bio' => "Hi, I'm Kholeka! With over 5 years of experience specializing in braiding, I'm passionate about creating beautiful, protective styles that make you feel confident and elegant. I believe in quality over quantity, which is why I work with each client individually to ensure their hair is healthy and their style is perfect.",
            'values' => [
                'Clean & Professional Environment',
                'Premium Quality Hair Products',
                'Gentle on Your Scalp & Hair',
                'Customized Styles for Your Face Shape'
            ],
            'experience' => '5+ Years',
            'philosophy' => "Every head of hair tells a story. My approach combines traditional braiding techniques with modern artistry to create styles that are not only beautiful but also protective and comfortable. I take the time to understand your hair type, lifestyle, and personal style to create a look that's uniquely you.",
            'specialties' => [
                'Knotless Braiding Techniques',
                'Scalp-Friendly Protective Styles',
                'Custom Color Integration',
                'Intricate Braiding Patterns'
            ]
        ];
    }
}