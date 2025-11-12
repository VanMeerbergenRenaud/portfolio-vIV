<?php

namespace App\Models;

use App\Enums\ProjectDifficulty;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $casts = [
        'tags' => 'array',
        'roles' => 'array',
        'tools' => 'array',
        'context_gallery' => 'array',
        'results_gallery' => 'array',
        'difficulty' => ProjectDifficulty::class,
        'is_published' => 'boolean',
        'year' => 'integer',
        'order' => 'integer',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($project) {
            if (empty($project->slug)) {
                $project->slug = Str::slug($project->name);
            }
        });

        static::updating(function ($project) {
            if ($project->isDirty('name') && empty($project->slug)) {
                $project->slug = Str::slug($project->name);
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

    /**
     * Accesseur pour récupérer les outils avec leurs détails
     * Gère les tools stockés comme strings (noms d'outils)
     */
    public function getToolsDetailsAttribute(): Collection
    {
        if (! $this->tools || ! is_array($this->tools)) {
            return collect();
        }

        // Convertir les noms d'outils en objets simples pour un affichage uniforme
        return collect($this->tools)->map(function ($tool) {
            return (object) ['name' => $tool];
        });
    }
}
