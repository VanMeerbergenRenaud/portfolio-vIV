<?php

namespace App\Livewire\Pages\Home;

use App\Models\Testimonial;
use Livewire\Component;

class Testimonials extends Component
{
    public $testimonials;

    public $testimonialCount;

    public function mount()
    {
        $this->testimonials = Testimonial::published()
            ->ordered()
            ->limit(5)
            ->get();

        $this->testimonialCount = Testimonial::published()
            ->count();
    }

    public function render()
    {
        return view('livewire.pages.home.testimonials');
    }
}
