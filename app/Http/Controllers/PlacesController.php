<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;
use DB;

class PlacesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (isset($request)) {
            $search = $request->get('search');
            $places = DB::table('places')->where('place_name', 'like', '%'.$search.'%')->orWhere('place_address', 'like', '%'.$search.'%')->paginate(10);
            return view('places.index')->with('places', $places);
        } else {
            $places = Place::orderBy('id')->paginate(10);
            return view('places.index')->with('places', $places);
        }
    }

    /**
     * Display a listing of searched parts of the resource.
     * 
     */
    public function search(Request $request)
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('places.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $place = new Place;
        $place->place_name = $_REQUEST['place-name'];
        $place->place_phone = $_REQUEST['place-phone'];
        $place->place_google_url = $_REQUEST['place-google-url'];
        $place->place_remarks = $_REQUEST['place-remarks'];
        $place->place_address = $_REQUEST['place-address'];
        $place->save();

        return redirect('/places');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $place = Place::find($id);
        return view('places.show')->with('place', $place);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
