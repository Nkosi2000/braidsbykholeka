<?php

// app/Models/PortfolioItem.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'category',
        'style_type',
        'hair_type',
        'duration',
        'is_featured',
        'sort_order',
        'main_image',
        'gallery_images',
        'tags',
        'client_feedback',
        'client_initials',
    ];

    protected $casts = [
        'gallery_images' => 'array',
        'tags' => 'array',
    ];

    // Scope for featured items
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    // Scope by category
    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    // Scope for ordering
    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('created_at', 'desc');
    }

    // Get full image URL
    public function getImageUrlAttribute()
    {
        return asset($this->main_image);
    }

    // Get gallery images as URLs
    public function getGalleryUrlsAttribute()
    {
        if (!$this->gallery_images) {
            return [];
        }

        return array_map(function($image) {
            return asset($image);
        }, $this->gallery_images);
    }
}
