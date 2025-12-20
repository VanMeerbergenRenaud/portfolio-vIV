<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Développeur web fullstack à Liège - Renaud Van Meerbergen')]
class Home extends Component
{
    public function render()
    {
        return view('livewire.pages.home')
            ->layout('layouts.guest');
    }
}
