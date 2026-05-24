<?php

namespace App\Livewire\Pages\Home;

use App\Models\Project;
use Livewire\Component;

class Projects extends Component
{
    public function render()
    {
        return view('livewire.pages.home.projects', [
            'projects' => Project::published()
                ->ordered()
                ->limit(3)
                ->get(),
            'projectCount' => Project::published()->count(),
        ]);
    }
}
