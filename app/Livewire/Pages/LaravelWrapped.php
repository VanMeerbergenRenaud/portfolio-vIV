<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class LaravelWrapped extends Component
{
    public function render()
    {
        return view('livewire.pages.laravel-wrapped')
            ->layout('layouts.guest');
    }
}
