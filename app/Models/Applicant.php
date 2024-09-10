<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $table = 'applicant';
    protected $primaryKey = 'applicant_id';
    public $timestamps = false;
    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'gender',
        'contact_number',
        'email',
        'dob',
        'citizenship',
        'region',
        'province',
        'city',
        'brgy',
        'zip_code'

    ];
}
