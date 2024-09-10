<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Application;

class ApplicationTable extends Component
{
    public $search = '';
    public function render()
    {
        return view('livewire.application-table', [
            'applications' => Application::search($this->search)->where('status', 'Confirm')->get()
        ]);
    }
}
