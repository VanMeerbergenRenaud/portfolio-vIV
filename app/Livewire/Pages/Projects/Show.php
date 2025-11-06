<?php

namespace App\Livewire\Pages\Projects;

use App\Models\Project;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Projet')]
class Show extends Component
{
    public $project;

    public $projects;

    public function mount($slug)
    {
        $this->project = Project::where('slug', $slug)
            ->published()
            ->firstOrFail();

        // Récupérer 2 projets aléatoires excluant le projet actuel
        $this->projects = Project::published()
            ->where('id', '!=', $this->project->id)
            ->inRandomOrder()
            ->limit(2)
            ->get();
    }

    public function render()
    {
        return view('livewire.pages.projects.show')
            ->layout('layouts.guest');
    }
}
