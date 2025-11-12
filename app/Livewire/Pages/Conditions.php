<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Conditions d’utilisation')]
class Conditions extends Component
{
    public function render()
    {
        return view('livewire.pages.conditions')
            ->layout('layouts.guest');
    }
}
