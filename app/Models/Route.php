<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;
    protected $table = 'routes';
    protected $fillable = [
        'name',
        'price',
        'currency',
        'taxi_id',
    ];

    public function taxiroute()
    {
       return $this->belongsTo(Taxi::class,'taxi_id', 'id');
    }
}
