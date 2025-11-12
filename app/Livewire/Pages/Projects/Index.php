<?php

namespace App\Livewire\Pages\Projects;

use App\Models\Project;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Mes projets')]
class Index extends Component
{
    public $projects;

    public $types;

    public function mount()
    {
        $this->projects = Project::published()
            ->ordered()
            ->get();

        // Extraire les types distincts de la collection
        $this->types = $this->projects
            ->pluck('type')
            ->filter()
            ->unique()
            ->sort()
            ->values();
    }

    public function render()
    {
        return view('livewire.pages.projects.index')
            ->layout('layouts.guest');
    }
}
