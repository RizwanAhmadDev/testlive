<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    use HasFactory;
    protected $table = 'enquiries';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'country',
        'british_citizen',
        'taxi',
        'hotel',
        'ticket',
        'umrah_package',
        'pickup',
        'destination'
    ];
}
