<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    protected $fillable = [
        'hall_name', 'hall_desc', 'hall_image', 'hall_seats_count'
    ];

    //relation between hall and movie : hall include has more movie and movie has one hall
    public function movie()
    {
    	return $this->hasMany('App\Movie');
    }
}
