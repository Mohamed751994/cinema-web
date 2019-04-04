<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{

	protected $fillable = [
        'movie_name', 'movie_desc', 'hall_id', 'movie_image', 'movie_length'
    ];

    //relation between hall and movie : hall include has more movie and movie has one hall
    public function hall()
    {
    	return $this->belongsTo('App\Hall');
    }
}
