<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display all services
     */
    public function index()
    {
        $services = Service::orderBy('sort_order')->get();
        
        // Group services by category if you have categories
        $groupedServices = $services->groupBy('category');
        
        return view('pages.services', [
            'title' => 'Services & Pricing | Luxury Braiding',
            'services' => $services,
            'groupedServices' => $groupedServices
        ]);
    }

    /**
     * Display a single service detail page
     */
    public function show($slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();
        
        // Get related services (same category, excluding current)
        $relatedServices = Service::where('category', $service->category)
                                 ->where('id', '!=', $service->id)
                                 ->orderBy('sort_order')
                                 ->take(3)
                                 ->get();
        
        return view('pages.service-detail', [
            'title' => $service->name . ' | Braids by Kholeka',
            'service' => $service,
            'relatedServices' => $relatedServices
        ]);
    }
}