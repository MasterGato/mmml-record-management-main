<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Application;

class ApprovalTable extends Component
{
    public $search = '';
    public function render()
    {
        return view(
            'livewire.approval-table',
            [
                'applications' => Application::search($this->search)->get()
            ]
        );
    }

    public function confirm($id)
    {
        $application = Application::find($id);
        $application->status = 'Confirm';
        $application->save();
    }

    public function reject($id)
    {
        $application = Application::find($id);
        $application->status = 'Reject';
        $application->save();
    }
}
