<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Country;
use App\Models\JobPosition;

class AppPositionTable extends Component
{

    public $jobPosition;
    public $country;
    public $selectedJob;
    public $search = '';
    public function render()
    {
        return view(
            'livewire.app-position-table',
            [
                'countries' => Country::all(),
                'jobPositions' => JobPosition::search($this->search)->paginate(10)
            ]
        );
    }

    public function save(){


        $this->validate([
            'jobPosition' => 'required',
            'country' => 'required',

        ]);

        JobPosition::create([
            'job' => $this->jobPosition,
            'country_id' => $this->country,

        ]);
        $this->reset(   'jobPosition', 'country');
    }

    public function selectJob($id){
        $job = JobPosition::find($id);
        $this->selectedJob = $job;
        $this->jobPosition = $job->job;
        $this->country = $job->country_id;
    }

    public function update(){
        $this->validate([
            'jobPosition' => 'required',
            'country' => 'required',

        ]);

        $this->selectedJob->update([
            'job' => $this->jobPosition,
            'country_id' => $this->country,
        ]);
        session()->flash('message', 'Job Position Updated Successfully.');
    }

    public function deleteJob($id){
        $job = JobPosition::find($id);
        $job->delete();
    }
}
