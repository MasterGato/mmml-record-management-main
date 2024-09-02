<?php

namespace App\Livewire;

use App\Models\User;

use Livewire\Component;

class UsersTable extends Component
{
    public $username;
    public $password;
    public $firstname;
    public $lastname;
    public $middlename;
    public $branch;
    public $role;
    public $email;
    public $contactNumber;
    
    public $search='';
  
    public function render()
    {
        return view('livewire.user-table',[
            'users' => User::search($this->search)->paginate(10)
        ]);
    }
    public function addUser(){
        UsersTable::create([
        'FirstName'=> $this->firstname,
        'MiddleName'=>$this->middlename,
        'LastName'=>$this->lastname,
        ]);
     }
}
