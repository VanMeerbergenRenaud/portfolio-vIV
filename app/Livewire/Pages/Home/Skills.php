<?php

namespace App\Livewire\Pages\Home;

use App\Models\Skill;
use Livewire\Component;

class Skills extends Component
{
    public function render()
    {
        return view('livewire.pages.home.skills', [
            'skills' => Skill::published()->ordered()->get(),
        ]);
    }
}
