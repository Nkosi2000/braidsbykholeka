
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Home Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');

// Service Routes
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('services.show');

// Portfolio Routes
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/portfolio/{slug}', [PortfolioController::class, 'show'])->name('portfolio.show');

// Contact Routes
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Optional: Fallback for old routes
Route::get('/services/index', function () {
    return redirect()->route('services.index');
});

Route::get('/portfolio/gallery', function () {
    return redirect()->route('portfolio');
});