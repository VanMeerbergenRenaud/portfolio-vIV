<?php

namespace App\Livewire\Pages\Home;

use App\Models\Service;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Services extends Component
{
    public $services;

    public function mount()
    {
        $this->services = Service::published()->ordered()->get();
    }

    #[Computed]
    public function servicesWithUrls()
    {
        return $this->services->map(function ($service) {
            return [
                'number' => $service->number,
                'title' => $service->title,
                'description' => $service->description,
                'tags' => $service->tags,
                'image_url' => $service->image
                    ? Storage::disk('s3')->url($service->image)
                    : asset('img/placeholder.png'),
            ];
        });
    }

    public function render()
    {
        return view('livewire.pages.home.services');
    }
}
