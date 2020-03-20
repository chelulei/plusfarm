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
use Auth;
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
         $produces =Produce::where("user_id",Auth::user()->id)->orderBy('id', 'desc')->get();
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
        $produce = Produce::findOrFail($id);
    if ($produce->status  > 0 ){
        $preparations = Produce::with('preparations')->find($id)->preparations;
        $storages = Produce::with('storages')->find($id)->storages;
        $plantings = Produce::with('plantings')->find($id)->plantings;
        $harvestings = Produce::with('harvestings')->find($id)->harvestings;
        $activities = Produce::with('activities')->find($id)->activities;
        $produce = Produce::where('id','=',$id)->first();
        $produces =Produce::where("user_id",Auth::user()->id)->orderBy('id', 'desc')->get();
        $sum = Preparation::where('produce_id','=',$id)->sum('cost');
        $sum2 = Planting::where('produce_id','=',$id)->sum('cost');
        $sum3 = Harvesting::where('produce_id','=',$id) ->sum('cost');
        $sum4 = Storage::where('produce_id','=',$id)->sum('cost');
 return view('reports.financial',compact('sum','sum2','sum3','sum4','produces','produce','harvestings','plantings','storages','preparations','activities'));
         }else {
            return back()->with('error', "No reccords yet!!!");
         }


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perform($id)
    {
        //        //
        $produce = Produce::findOrFail($id);
    if ($produce->status == 1 ){
        $preparations = Produce::with('preparations')->find($id)->preparations;
        $storages = Produce::with('storages')->find($id)->storages;
        $plantings = Produce::with('plantings')->find($id)->plantings;
        $harvestings = Produce::with('harvestings')->find($id)->harvestings;
        $activities = Produce::with('activities')->find($id)->activities;
        $produce = Produce::where('id','=',$id)->first();
        $produces =Produce::where("user_id",Auth::user()->id)->orderBy('id', 'desc')->get();
        $sum = Preparation::where('produce_id','=',$id)->sum('cost');
        $sum2 = Planting::where('produce_id','=',$id)->sum('cost');
        $sum3 = Harvesting::where('produce_id','=',$id) ->sum('cost');
        $sum4 = Storage::where('produce_id','=',$id)->sum('cost');
 return view('reports.performance',compact('sum','sum2','sum3','sum4','produces','produce','harvestings','plantings','storages','preparations','activities'));
         }else {
            return back()->with('error', "No reccords yet!!!");
         }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

     $ok = Produce::find($request->cp_id)->increment('status', 1);

     if($ok){

         DB::table('farms')
    ->where('id', $request->fm_id)
    ->increment('size',$request->pd_id);

      DB::table('preparations')
        ->whereRaw('produce_id ', $request->cp_id)
        ->increment('status',1);

    DB::table('harvestings')
        ->whereRaw('produce_id ', $request->cp_id)
        ->increment('status',1);

    DB::table('plantings')
        ->whereRaw('produce_id ', $request->cp_id)
        ->increment('status',1);

    DB::table('storages')
        ->whereRaw('produce_id ', $request->cp_id)
        ->increment('status', 1);

    DB::table('activities')
    ->whereRaw('produce_id ', $request->cp_id)
    ->increment('status',1);

       DB::table('cultivations')
    ->whereRaw('produce_id ', $request->cp_id)
    ->increment('status',1);


            return back()->with('success', "Activity completed successfully");
     }else {
            return back()->with('error', "Something wen't wrong! Please try again");

     }
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
