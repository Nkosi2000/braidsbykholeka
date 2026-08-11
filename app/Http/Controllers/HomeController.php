<?php

namespace App\Http\Controllers;

use App\Models\PortfolioItem;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        // Get featured portfolio items
        $featuredStyles = PortfolioItem::where('is_featured', true)
                                      ->orderBy('sort_order')
                                      ->take(6)
                                      ->get();

        // Get featured services
        $featuredServices = Service::where('is_featured', true)
                                    ->orderBy('sort_order')
                                    ->take(4)
                                    ->get();

        // Pull a couple of client testimonials from the portfolio
        $testimonials = PortfolioItem::whereNotNull('client_feedback')
                                      ->orderBy('sort_order')
                                      ->take(3)
                                      ->get();

        return view('pages.home', [
            'title' => 'Braids by Kholeka | Exclusive Hair Artistry',
            'featuredStyles' => $featuredStyles,
            'featuredServices' => $featuredServices,
            'testimonials' => $testimonials,
        ]);
    }

    public function about()
    {
        return view('pages.about', [
            'title' => 'About Kholeka | Hair Artistry & Expertise',
            'aboutContent' => $this->getAboutContent()
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