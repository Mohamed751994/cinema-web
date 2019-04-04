<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Hall;
use\App\Movie;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard')
                                ->with('hall_count' , Hall::all()->count() )
                                ->with('movie_count' , Movie::all()->count());
    }





}
