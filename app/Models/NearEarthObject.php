<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NearEarthObject extends Model
{
    use HasFactory;
    protected $table = 'near_earth_objects';
    protected $guarded = false;
}
