<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Hall;
use DB;

class HallsController extends Controller
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
        $halls = Hall::all();
        return view('halls.all')->with('halls', $halls);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('halls.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation to add Hall
        $this->validate($request, [

            'hall_name'        => 'required',
            'hall_desc'        => 'required',
            'hall_image'       => 'required|image',
            'hall_seats_count' => 'required',
        ]);

        // To Upload photo 
        $image     = $request->hall_image;
        $new_image = time().$image->getClientOriginalName();
        $image->move('backend/images', $new_image);

        //to create A new hall
        $hall = Hall::create([

            'hall_name'        => $request->hall_name,
            'hall_desc'        => $request->hall_desc,
            'hall_image'       => 'backend/images/' . $new_image,
            'hall_seats_count' => $request->hall_seats_count,

        ]); 
        return redirect()->route('hall.all')->with('message', 'Added a New Hall');



    }

    
    public function edit($hall_id)
    {
        //i use query builder in this method to edit a hall
        $hall = DB::table('halls')->where('hall_id', $hall_id)->first();
        return view('halls.edit')->with('hall',$hall);
    }

    /**
     * Update the specified resource in storage
     */
    public function update(Request $request, $hall_id)
    {
        $data = array();
        $data['hall_id']          = $request->hall_id;
        $data['hall_name']        = $request->hall_name;
        $data['hall_desc']        = $request->hall_desc;
        $data['hall_seats_count'] = $request->hall_seats_count;
       
       //to Update the Uploading image
        $image = $request->file('hall_image');
        if ($image) {
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'backend/images/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if ($success) {
                $data['hall_image'] = $image_url;

                DB::table('halls')->where('hall_id', $hall_id)->update($data);
                return redirect()->route('hall.all')->with('message', 'Hall Updated with photo');
            }
        }
        $data['hall_image'] = '';

        DB::table('halls')->where('hall_id', $hall_id)->update($data);
        return redirect()->route('hall.all')->with('message', 'Hall Updated without photo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($hall_id)
    {
        DB::table('halls')->where('hall_id', $hall_id)->delete();
        return redirect()->back()->with('message', ' Hall Removed !');
    }




} //end of class
