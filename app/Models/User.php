<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class User extends Model
{

    use HasFactory;
    public $timestamps = false;
    protected $table = 'user';

    protected $primaryKey = 'user_id';

    protected $fillable = [
        'FirstName',
        'LastName',
        'MiddleName',
        'Position',
        'Status',
        'ContactNumber',
        'email',
        'Username',
        'password',
        'Branch'
    ];

    public function scopeSearch($query, $value)
    {
       
    }
}

