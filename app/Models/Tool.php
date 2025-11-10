<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    use HasFactory;

    protected $casts = [
        'is_stat_card' => 'boolean',
        'is_published' => 'boolean',
        'order' => 'integer',
    ];


    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'asc');
    }

    public function scopeStatCards($query)
    {
        return $query->where('is_stat_card', true);
    }

    public function scopeRegularTools($query)
    {
        return $query->where('is_stat_card', false);
    }
}
