<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'country';
    protected $primaryKey = 'country_id';
    protected $fillable = ['country'];

}
