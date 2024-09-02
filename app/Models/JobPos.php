<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPos extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = '';

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

}
