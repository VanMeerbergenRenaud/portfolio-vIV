<?php

namespace App\Livewire\Pages\Home;

use App\Models\Process as ProcessList;
use Livewire\Component;

class Processes extends Component
{
    public function render()
    {
        $processes = ProcessList::published()->ordered()->get();

        return view('livewire.pages.home.processes', [
            'processes' => $processes,
            'totalProcesses' => $processes->count(),
        ]);
    }
}
