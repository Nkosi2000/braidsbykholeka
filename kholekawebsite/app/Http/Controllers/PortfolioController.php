<?php

namespace App\Http\Controllers;

use App\Models\PortfolioItem;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolioItems = PortfolioItem::orderBy('sort_order')->get();
        $categories = PortfolioItem::distinct('category')->pluck('category');
        
        return view('pages.portfolio', [
            'title' => 'Portfolio Gallery | Braiding Artistry',
            'portfolioItems' => $portfolioItems,
            'categories' => $categories
        ]);
    }
    
    public function show($slug)
    {
        $item = PortfolioItem::where('slug', $slug)->firstOrFail();
        
        // Get related items (same category)
        $relatedItems = PortfolioItem::where('category', $item->category)
                                    ->where('id', '!=', $item->id)
                                    ->orderBy('sort_order')
                                    ->take(4)
                                    ->get();
        
        return view('pages.portfolio-detail', [
            'title' => $item->title . ' | Braids by Kholeka',
            'item' => $item,
            'relatedItems' => $relatedItems
        ]);
    }
}