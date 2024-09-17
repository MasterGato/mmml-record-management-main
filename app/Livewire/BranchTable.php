<?php

namespace App\Livewire;

use App\Models\Branch;

use Livewire\Component;

class BranchTable extends Component
{

    public $city;
    public $region;
    public $province;

    public $selected_branch;
    public $updatebranchName;
    public $updateCity;
    public $updateProvince;
    public $updateRegion;

    public $search = '';
    public function render()
    {
        return view('livewire.branch-table', [
            'branches' => Branch::search($this->search)->paginate(10)
        ]);
    }


    public function addBranch()
    {

        $this->validate([
            'city' => 'required',
            'region' => 'required',
            'province' => 'required'
        ]);

        Branch::create([
            'city' => $this->city,
            'region' => $this->region,
            'province' => $this->province,
            'branch_name' => 'MMML-' . $this->city
        ]);

        $this->city = '';
        $this->region = '';
        $this->province = '';
        session()->flash('message', 'Branch added successfully');
    }
    public function updateBranch()
    {
        $this->selected_branch->updateBranch([
            'branch_name'=> $this->updatebranchName,
            'city'=> $this->updateCity,
            'province'=> $this->updateProvince,
            'region'=> $this->updateRegion
        ]);
        $this->city = '';
        $this->region = '';
        $this->province = '';
        $this->dispatch('close-modal');
        session()->flash('message', 'Branch updated successfully');
    }
    public function delete($id)
    {
        Branch::find($id)->delete();
        session()->flash('message', 'Amenities deleted successfully.');
        $this->dispatch('close-modal');
    }

}
