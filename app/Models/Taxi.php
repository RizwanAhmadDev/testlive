<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taxi extends Model
{
    use HasFactory;
    protected $table = 'taxies';
    protected $fillable = [
        'name',
        'taxi_picture',
        'route_id',
    ];




}

