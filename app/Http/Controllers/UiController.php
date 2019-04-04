<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Hall;
use\App\Movie;
use\App\Booking;
use DB;

// this class is user interface 
class UiController extends Controller
{
	//show all halls and movies in my website
    public function show_halls()
    {
    	$halls  = Hall::all();
    	$movies = Movie::all();
    	return view('welcome')->with('halls', $halls)->with('movies', $movies);
	}

	//this method because i show halls and its movies
	public function show_movie_by_hall($hall_id)
	{
		$movie_halls = DB::table('movies')
           ->join('halls', 'movies.hall_id', '=', 'halls.hall_id')
           ->select('movies.*', 'halls.hall_name')
           ->where('halls.hall_id', $hall_id)
           ->get();
        return view('ui.movies_by_halls')->with('movie_halls', $movie_halls);
	}


	// this method because show movie by id 
	public function movie_details_by_id($movie_id)
	{
		$movie_details = DB::table('movies')
           ->join('halls', 'movies.hall_id', '=', 'halls.hall_id')
           ->select('movies.*', 'halls.hall_name')
           ->where('movies.movie_id', $movie_id)
           ->first();
        return view('ui.movie_details')->with('movie_details', $movie_details);
	}


	// booking method
	public function booking()
	{

        return view('ui.book');
	}


	public function store(Request $request)
	{
		// Validation to add Hall
        $this->validate($request, [
            'booking_name'     => 'required',
            'booking_email'    => 'required',
            'booking_date'     => 'required',
            'booking_party'    => 'required',
            'booking_seat'     => 'required',
            'booking_payment'  => 'required',
        ]);

        //save Booking in my DB
        $book = Booking::create([

            'booking_name'    => $request->booking_name,
            'booking_email'   => $request->booking_email,
            'booking_date'    => $request->booking_date,
            'booking_party'   => $request->booking_party,
            'booking_seat'    => $request->booking_seat,
            'booking_payment' => $request->booking_payment,

        ]); 
        return view('ui.done');
	}






}  // end of class
