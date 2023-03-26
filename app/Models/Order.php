<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'street_address',
        'city',
        'state',
        'zip_code',
        'notes',
        'order_name',
        'order_price',
    ];
}
