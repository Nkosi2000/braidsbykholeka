<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the services.
     */
    public function index()
    {
        // Fetch all services, ordered by your preferred field
        $services = Service::orderBy('sort_order')->get();

        // Pass the services data to the 'services.index' view
        return view('services.index', compact('services'));
    }

    /**
     * Display a single service (optional, for future detail pages).
     */
    public function show(Service $service)
    {
        return view('services.show', compact('service'));
    }
}
