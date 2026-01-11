<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'service_interest',
        'preferred_date',
        'message',
        'status',
        'admin_notes',
    ];

    protected $casts = [
        'preferred_date' => 'date',
    ];

    public function scopeNew($query)
    {
        return $query->where('status', 'new');
    }

    public function scopeContacted($query)
    {
        return $query->where('status', 'contacted');
    }

    public function getFormattedDateAttribute()
    {
        return $this->preferred_date ? $this->preferred_date->format('F j, Y') : 'Not specified';
    }
}