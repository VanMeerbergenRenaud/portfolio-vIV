<?php

namespace App\Livewire\Pages\Home;

use App\Models\Testimonial;
use Livewire\Component;

class Testimonials extends Component
{
    public function render()
    {
        return view('livewire.pages.home.testimonials', [
            'testimonials' => Testimonial::published()
                ->ordered()
                ->limit(5)
                ->get(),
            'testimonialCount' => Testimonial::published()
                ->count(),
        ]);
    }
}
