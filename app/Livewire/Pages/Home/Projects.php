<?php

namespace App\Livewire\Pages\Home;

use App\Models\Project;
use Livewire\Component;

class Projects extends Component
{
    public $projects = [];

    public $projectCount = 0;

    public function mount()
    {
        $this->projects = Project::published()
            ->ordered()
            ->limit(3)
            ->get();
        $this->projectCount = Project::published()->count();
    }

    public function render()
    {
        return view('livewire.pages.home.projects');
    }
}
