<?php

// app/Models/Service.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'starting_price',
        'detailed_description',
        'duration',
        'category',
        'is_featured',
        'sort_order',
        'icon_class',
        'image_path',
        'features',
        'aftercare_tips',
    ];

    protected $casts = [
        'features' => 'array',
        'aftercare_tips' => 'array',
        'starting_price' => 'decimal:2',
    ];

    // Scope for featured services
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    // Scope for ordering
    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('name');
    }

    // Format price for display
    public function getFormattedPriceAttribute()
    {
        if (!$this->starting_price) {
            return 'Starting from consultation';
        }
        return '$' . number_format($this->starting_price, 0);
    }
}