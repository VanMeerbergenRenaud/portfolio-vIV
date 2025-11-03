<?php

namespace App\Livewire\Pages\Home;

use App\Models\Service;
use Livewire\Component;

class Services extends Component
{
    public $services;

    public function mount()
    {
        $this->services = Service::published()->ordered()->get();
    }

    public function render()
    {
        return view('livewire.pages.home.services');
    }
}
