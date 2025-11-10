<?php

namespace App\Livewire\Pages\Home;

use App\Models\Hero as HeroInfos;
use Livewire\Component;

class Hero extends Component
{
    public $hero;

    public function mount()
    {
        $this->hero = HeroInfos::published()->first();
    }

    public function render()
    {
        return view('livewire.pages.home.hero');
    }
}
