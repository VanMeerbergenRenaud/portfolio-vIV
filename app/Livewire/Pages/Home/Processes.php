<?php

namespace App\Livewire\Pages\Home;

use App\Models\Process as ProcessList;
use Livewire\Component;

class Processes extends Component
{
    public $processes;

    public $totalProcesses;

    public function mount()
    {
        $this->processes = ProcessList::published()->ordered()->get();
        $this->totalProcesses = $this->processes->count();
    }

    public function render()
    {
        return view('livewire.pages.home.processes');
    }
}
