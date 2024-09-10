<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationAttainment extends Model
{
    use HasFactory;
    protected $table = 'educational_attainment';
    protected $primaryKey = 'education_id';
    public $timestamps = false;
    protected $fillable = [
        'applicant_id',
        'level',
        'institution',
        'inclusive_date',
        'applicant_id'
    ];
}
