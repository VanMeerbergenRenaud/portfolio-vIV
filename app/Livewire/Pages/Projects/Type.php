<?php

namespace App\Livewire\Pages\Projects;

use App\Enums\ProjectType;
use App\Models\Project;
use Livewire\Component;

class Type extends Component
{
    public string $type;

    public $projects;

    public $types;

    public function mount(string $type)
    {
        $this->type = $type;

        $this->projects = Project::published()
            ->where('type', $type)
            ->orderBy('updated_at', 'desc')
            ->get();

        $this->types = Project::published()
            ->whereNotNull('type')
            ->distinct()
            ->pluck('type')
            ->sort()
            ->values();
    }

    public function render()
    {
        $typeEnum = ProjectType::tryFrom($this->type);
        $title = 'Projets '.($typeEnum?->label() ?? ucfirst($this->type));

        return view('livewire.pages.projects.type')
            ->layout('layouts.guest')
            ->title($title);
    }
}
