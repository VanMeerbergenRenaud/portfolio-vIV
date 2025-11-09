<?php

namespace App\Livewire\Pages\Home;

use App\Models\About as AboutInfos;
use Livewire\Component;

class About extends Component
{
    public $about;

    public function mount()
    {
        $this->about = AboutInfos::published()->first();
    }

    public function render()
    {
        return view('livewire.pages.home.about');
    }
}
