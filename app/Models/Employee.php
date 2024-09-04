<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'employee';
    protected $primaryKey = 'employee_id';


    protected $fillable = [
        'username',
        'password',
        'first_name',
        'last_name',
        'middle_name',
        'role',
        'contact',
        'email',
        'branch_id',
        'status'
    ];

    public function scopeSearch($query, $value){
        return $query->where('first_name', 'like', '%'.$value.'%')
            ->orWhere('last_name', 'like', '%'.$value.'%')
            ->orWhere('middle_name', 'like', '%'.$value.'%')
            ->orWhere('role', 'like', '%'.$value.'%')
            ->orWhere('contact', 'like', '%'.$value.'%')
            ->orWhere('email', 'like', '%'.$value.'%')
            ->orWhere('status', 'like', '%'.$value.'%');
    }

    public function branch(){
        return $this->belongsTo(Branch::class, 'branch_id');
    }
}
