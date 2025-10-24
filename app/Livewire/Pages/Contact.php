<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Contact')]
class Contact extends Component
{
    public function render() {
        return view('livewire.pages.contact')
            ->layout('layouts.guest');
    }
}
