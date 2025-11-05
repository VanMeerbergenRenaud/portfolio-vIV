<?php

namespace App\Livewire\Pages\Articles;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Article')]
class Show extends Component
{
    public function render()
    {
        return view('livewire.pages.articles.show')
            ->layout('layouts.guest');
    }
}
