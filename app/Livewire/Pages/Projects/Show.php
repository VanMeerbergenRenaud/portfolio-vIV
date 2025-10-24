<?php

namespace App\Livewire\Pages\Projects;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Mon projet')]
class Show extends Component
{
    public function render()
    {
        return view('livewire.pages.projects.show')
            ->layout('layouts.guest');
    }
}
