<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    /** @use HasFactory<\Database\Factories\ExperienceFactory> */
    use HasFactory;

    protected $fillable = [
        'type',
        'company',
        'position',
        'description',
        'location',
        'started_at',
        'ended_at',
        'order',
    ];

    protected $casts = [
        'started_at' => 'date',
        'ended_at' => 'date',
    ];
}
