<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $table = 'application';
    protected $primaryKey = 'application_id';
    public $timestamps = false;
    protected $fillable = [
        'applicant_id',
        'job_id',
        'branch_id',
        'type_of_applicant',
        'date_of_application',
        'applicant_id',

        'status',
    ];

    public function scopeSearch($query, $value)
    {
        return $query->where('application_id', 'like', '%' . $value . '%')
            ->orWhere('applicant_id', 'like', '%' . $value . '%')
            ->orWhere('job_id', 'like', '%' . $value . '%')
            ->orWhere('branch_id', 'like', '%' . $value . '%')
            ->orWhere('type_of_application', 'like', '%' . $value . '%')
            ->orWhere('date_of_application', 'like', '%' . $value . '%')
            ->orWhere('status', 'like', '%' . $value . '%')
            ->orWhereHas('applicant', function ($query) use ($value) {
                $query->where('first_name', 'like', '%' . $value . '%')
                    ->orWhere('last_name', 'like', '%' . $value . '%');
            });
    }

    public function applicant()
    {
        return $this->belongsTo(Applicant::class, 'applicant_id', 'applicant_id');
    }
    public function job()
    {
        return $this->belongsTo(JobPosition::class, 'job_id', 'job_id');
    }
    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id', 'branch_id');
    }
}
