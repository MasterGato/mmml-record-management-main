<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPosition extends Model
{
    use HasFactory;

    protected $table = 'job_position';
    protected $primaryKey = 'job_id';
    protected $fillable = ['job', 'country_id'];
    public $timestamps = false;


    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'country_id');
    }

    public function scopeSearch($query, $search)
    {
        return $query->where('job', 'like', '%' . $search . '%')
            ->orWhereHas('country', function ($query) use ($search) {
                $query->where('country', 'like', '%' . $search . '%');
            });
    }

}
