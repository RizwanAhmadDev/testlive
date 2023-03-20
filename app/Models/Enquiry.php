<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;
use App\Mail\EnquirySubmitted;


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

    // public static function boot() {
  
    //     parent::boot();
  
    //     static::created(function ($item) {
                
    //         $adminEmail = "rizahmaddev@gmail.com";
    //         Mail::to($adminEmail)->send(new EnquirySubmitted($item));
    //     });
    // }
}
