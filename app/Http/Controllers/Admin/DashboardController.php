<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use App\Models\PortfolioItem;
use App\Models\Service;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'serviceCount' => Service::count(),
            'portfolioCount' => PortfolioItem::count(),
            'newInquiryCount' => Inquiry::where('status', 'new')->count(),
            'recentInquiries' => Inquiry::latest()->take(5)->get(),
        ]);
    }
}
