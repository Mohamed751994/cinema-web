<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Hall;
use\App\Movie;
use DB;

class MoviesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all();
        return view('movies.all')->with('movies', $movies);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $halls = Hall::all();
        if ($halls->count() == 0) {
            return redirect()->route('halls.create');
        }
        return view('movies.add')->with('halls', $halls);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation to add Hall
        $this->validate($request, [

            'movie_name'    => 'required',
            'movie_desc'    => 'required',
            'movie_image'   => 'required|image',
            'hall_id'       => 'required',
            'movie_length'  => 'required',
        ]);

        // To Upload photo 
        $image     = $request->movie_image;
        $new_image = time().$image->getClientOriginalName();
        $image->move('backend/images', $new_image);

        //to create A new Movie
        $movie = Movie::create([

            'movie_name'        => $request->movie_name,
            'hall_id'           => $request->hall_id,
            'movie_image'       => 'backend/images/' . $new_image,
            'movie_desc'        => $request->movie_desc,
            'movie_length'      => $request->movie_length,

        ]); 
        return redirect()->route('movie.add')->with('message', 'Added a New Movie');

    }


    //to edit movie :
    public function edit($movie_id)
    {
        $halls = Hall::all();
        $edit_movies = DB::table('movies')->where('movie_id', $movie_id)->first();
        return view('movies.edit')
                                  ->with('edit_movies', $edit_movies)
                                  ->with('halls', $halls);
    }

    //to save edit movies:
    public function update(Request $request, $movie_id)
    {
        $data = array();
        $data['movie_name']    = $request->movie_name;
        $data['hall_id']       = $request->hall_id;
        $data['movie_desc']    = $request->movie_desc;
        $data['movie_length']  = $request->movie_length;
       
        $image = $request->file('movie_image');
        if ($image) {
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'backend/images/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if ($success) {
                $data['movie_image'] = $image_url;



                DB::table('movies')->where('movie_id', $movie_id)->update($data);
                return redirect()->route('movie.all')->with('message', 'Movie Updated !!');
            }
        }
       //  $data['movie_image'] = '';

       //  DB::table('movies')->where('movie_id', $movie_id)->update($data);
       // return redirect()->route('movie.all')->with('message', 'Movie Updated without image!!');
    }


    /**
     * Remove the specified resource from storage
     */
    public function destroy($movie_id)
    {
        DB::table('movies')->where('movie_id', $movie_id)->delete();
        return redirect()->back()->with('message', ' Movie Removed !');
    }
}
