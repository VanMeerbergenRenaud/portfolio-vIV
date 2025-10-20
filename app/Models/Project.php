<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'tech_stack',
        'url',
        'github_url',
        'image_path',
        'featured',
        'order',
        'started_at',
        'ended_at',
    ];

    protected $casts = [
        'tech_stack' => 'array',
        'featured' => 'boolean',
        'started_at' => 'date',
        'ended_at' => 'date',
    ];
}
