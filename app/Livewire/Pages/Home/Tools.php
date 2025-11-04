<?php

namespace App\Livewire\Pages\Home;

use App\Models\Tool;
use Livewire\Component;

class Tools extends Component
{
    public $tools = [];

    public function mount()
    {
        $this->tools = Tool::published()
            ->ordered()
            ->get();
    }

    public function render()
    {
        return view('livewire.pages.home.tools');
    }
}
