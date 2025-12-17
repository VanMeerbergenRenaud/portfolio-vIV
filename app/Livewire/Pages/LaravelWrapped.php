<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Laravel Wrapped')]
class LaravelWrapped extends Component
{
    public function render()
    {
        return view('livewire.pages.laravel-wrapped')
            ->layout('layouts.guest');
    }
}
