<?php

namespace App\Livewire\Pages\Projects;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Mes projets')]
class Index extends Component
{
    public function render()
    {
        return view('livewire.pages.projects.index')
            ->layout('layouts.guest');
    }
}
