<?php

namespace App\Livewire\Pages\Home;

use App\Models\Faq as FaqList;
use Livewire\Component;

class Faq extends Component
{
    public $faqs;

    public function mount()
    {
        $this->faqs = FaqList::published()->ordered()->get();
    }

    public function render()
    {
        return view('livewire.pages.home.faq');
    }
}
