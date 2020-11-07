<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Map;
class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function map1(Request $request)
    { $this->validate($request,[
        "address"=> "required",   
    ]);
        $map=Map::create([
            "address"=>$request->address,
            "latitude"=>0,
            "longitude"=>0
            ]);
        }
        public function map11()
        {
            $map=Map::odrerBy('created_at', 'DESC')->take(1)->get();
            return view('map1')->with('address',$map->address);
    }

public function map2(Request $request)
{ $map=Map::create([
    "address"=>" ",
    "latitude"=>$request->latitude,
    "longitude"=>$request->longitude,
    ]);
    
      return view('map2')->with('map',Map::find($request->latitude));
    }
}
