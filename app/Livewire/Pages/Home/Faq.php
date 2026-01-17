<?php

namespace App\Livewire\Pages\Home;

use App\Models\Faq as FaqList;
use Livewire\Component;

class Faq extends Component
{
    public function render()
    {
        return view('livewire.pages.home.faq', [
            'faqs' => FaqList::published()->ordered()->get(),
        ]);
    }
}
