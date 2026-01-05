<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service; // Add this line
use App\Models\PortfolioItem; // We'll create this model next

class PageController extends Controller
{
    public function home()
    {
        // Get 3 featured portfolio items from the database
        $featuredStyles = PortfolioItem::where('is_featured', true)
                                      ->orderBy('sort_order')
                                      ->take(3)
                                      ->get();
        
        return view('pages.home', [
            'title' => 'Home - Professional Braiding Salon',
            'featuredStyles' => $featuredStyles // Use database results
        ]);
    }
    
    public function services()
    {
        // Get all services from the database, ordered by sort_order
        $services = Service::orderBy('sort_order')->get();
        
        return view('pages.services', [
            'title' => 'Services & Prices',
            'services' => $services // Use database results
        ]);
    }
    
    public function portfolio()
    {
        // Get all portfolio items from the database
        $portfolioItems = PortfolioItem::orderBy('sort_order')->get();
        
        return view('pages.portfolio', [
            'title' => 'My Work - Braiding Portfolio',
            'portfolioItems' => $portfolioItems // Use database results
        ]);
    }
    
    public function about()
    {
        // You can keep this hard-coded or create an About model later
        return view('pages.about', [
            'title' => 'About Kholeka',
            'aboutContent' => $this->getAboutContent()
        ]);
    }
    
    public function contact()
    {
        return view('pages.contact', [
            'title' => 'Contact & Booking'
        ]);
    }
    
    public function submitContact(Request $request)
    {
        // Simple validation
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'service' => 'nullable|string',
            'message' => 'required|string'
        ]);
        
        // In a real app, send email here
        // Mail::to('kholeka@example.com')->send(new ContactForm($validated));
        
        return back()->with('success', 'Thank you! I\'ll contact you within 24 hours.');
    }
    
    // Keep the about content for now - you can move to database later
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
            'experience' => '5+ Years'
        ];
    }
    
    // Remove the old getServices(), getPortfolioItems(), and getFeaturedStyles() methods
    // since we're now using database models
}