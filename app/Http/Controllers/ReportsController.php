<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Produce;
use App\Plant;
use App\Preparation;
use App\Planting;
use App\Harvesting;
use App\Storage;
class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $produces = Produce::latest()->get();
         return view('reports.index',compact('produces'));
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
        //

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
     // $produces = Produce::latest()->get();
      //return view("reports.financial", compact('produce','produces'));

        $preparations = Produce::with('preparations')->find($id)->preparations;
        $storages = Produce::with('storages')->find($id)->storages;
        $plantings = Produce::with('plantings')->find($id)->plantings;
        $harvestings = Produce::with('harvestings')->find($id)->harvestings;
        $activities = Produce::with('activities')->find($id)->activities;
        $produce = Produce::where('id','=',$id)->first();
        $produces = Produce::all();
        $sum = Preparation::where('produce_id','=',$id)->sum('cost');
        $sum2 = Planting::where('produce_id','=',$id)->sum('cost');
        $sum3 = Harvesting::where('produce_id','=',$id)->sum('cost');
        $sum4 = Storage::where('produce_id','=',$id)->sum('cost');

        return view('reports.financial',compact('sum','sum2','sum3','sum4','produces','produce','harvestings','plantings','storages','preparations','activities'));
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
