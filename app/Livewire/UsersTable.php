<?php

namespace App\Livewire;

use App\Models\Employee;
use App\Models\User;

use Livewire\Component;
use App\Models\Branch;
use Livewire\WithPagination;

class UsersTable extends Component
{
    public $username;
    public $password;
    public $firstName;
    public $lastName;
    public $middleName;
    public $branch;
    public $role;
    public $contactNumber;
    public $email;
    public $search;

    public $selectedUser;


    use WithPagination;

    public function render()
    {
        return view('livewire.users-table',[
            'employees' => Employee::search($this->search)->paginate(10),
            'branches' => Branch::all(),
        ]);
    }


    public function save(){



        $this->validate(
            [
                'username' => 'required',
                'password' => 'required',
                'firstName' => 'required',
                'lastName' => 'required',
                'branch' => 'required',
                'role' => 'required',
                'contactNumber' => 'required',
                'email' => 'required',
            ]
            );

        Employee::create([
            'username' => $this->username,
            'password' => $this->password,
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'middle_name' => $this->middleName,
            'branch_id' => $this->branch,
            'role' => $this->role,
            'contact' => $this->contactNumber,
            'email' => $this->email,
            'status' => 'Active'
        ]);

        $this->username = '';
        $this->password = '';
        $this->firstName = '';
        $this->lastName = '';
        $this->middleName = '';
        $this->branch = '';
        $this->role = '';
        $this->contactNumber = '';

    }

    public function selectUser($id){
        $this->selectedUser = Employee::find($id);
        $this->username = $this->selectedUser->username;
        $this->password = $this->selectedUser->password;
        $this->firstName = $this->selectedUser->first_name;
        $this->lastName = $this->selectedUser->last_name;
        $this->middleName = $this->selectedUser->middle_name;
        $this->branch = $this->selectedUser->branch_id;
        $this->role = $this->selectedUser->role;
        $this->contactNumber = $this->selectedUser->contact;
        $this->email = $this->selectedUser->email;

    }

    public function update(){
        $this->validate(
            [
                'username' => 'required',
                'password' => 'required',
                'firstName' => 'required',
                'lastName' => 'required',
                'branch' => 'required',
                'role' => 'required',
                'contactNumber' => 'required',
                'email' => 'required',
            ]
            );

        $this->selectedUser->update([
            'username' => $this->username,
            'password' => $this->password,
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'middle_name' => $this->middleName,
            'branch_id' => $this->branch,
            'role' => $this->role,
            'contact' => $this->contactNumber,
            'email' => $this->email,
        ]);

        $this->username = '';
        $this->password = '';
        $this->email = '';
        $this->firstName = '';
        $this->lastName = '';
        $this->middleName = '';
        $this->branch = '';
        $this->role = '';
        $this->contactNumber = '';
        session()->flash('message', 'User Updated Successfully');
    }

    public function activateUser($id){
        $this->selectedUser = Employee::find($id);
        $this->selectedUser->update([
            'status' => 'Active'
        ]);
    }

    public function deactivateUser($id){
        $this->selectedUser = Employee::find($id);
        $this->selectedUser->update([
            'status' => 'Inactive'
        ]);
    }
}
