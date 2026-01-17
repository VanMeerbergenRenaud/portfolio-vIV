<?php

namespace App\Livewire\Pages\Home;

use App\Models\Tool;
use Livewire\Component;

class Tools extends Component
{
    public function render()
    {
        return view('livewire.pages.home.tools', [
            'tools' => Tool::published()
                ->ordered()
                ->get(),
        ]);
    }
}
