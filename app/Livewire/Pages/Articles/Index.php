<?php

namespace App\Livewire\Pages\Articles;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Mes articles')]
class Index extends Component
{
    public function render()
    {
        return view('livewire.pages.articles.index')
            ->layout('layouts.guest');
    }
}
