<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Branch extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $timestamps = false;
    protected $table = 'branch';
    protected $primaryKey = 'branch_id';
    protected $fillable = ['branch_name', 'province', 'city', 'region'];


    public function scopeSearch($query, $value){
        return $query->where('branch_name', 'like', '%'.$value.'%')
            ->orWhere('province', 'like', '%'.$value.'%')
            ->orWhere('city', 'like', '%'.$value.'%')
            ->orWhere('region', 'like', '%'.$value.'%');
    }

}
