<?php

namespace App\Livewire\Pages\Home;

use App\Models\CaseStudy as CaseStudyModel;
use Livewire\Component;

class CaseStudy extends Component
{
    public $caseStudy;

    public function mount()
    {
        $this->caseStudy = CaseStudyModel::published()
            ->ordered()
            ->first();
    }

    public function render()
    {
        return view('livewire.pages.home.case-study');
    }
}
