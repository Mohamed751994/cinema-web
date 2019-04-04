<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'booking_name', 'booking_email', 'booking_date', 'booking_party', 'booking_seat', 'booking_payment'
    ];
}
