<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CaseStudy extends Model
{
    use HasFactory;

    protected $casts = [
        'stats' => 'array',
        'is_published' => 'boolean',
        'year' => 'integer',
        'order' => 'integer',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($caseStudy) {
            if (empty($caseStudy->slug)) {
                $caseStudy->slug = Str::slug($caseStudy->title);
            }
        });

        static::updating(function ($caseStudy) {
            if ($caseStudy->isDirty('title') && empty($caseStudy->slug)) {
                $caseStudy->slug = Str::slug($caseStudy->title);
            }
        });
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'asc');
    }
}
