<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Produce;
use App\Plant;
use App\Preparation;
use App\Planting;
use App\Harvesting;
use App\Cultivation;
use App\Storage;
use App\Harvest;
use Auth;
use Carbon\Carbon;
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

        $preparations =Preparation::where('produce_id','=',$id)->orderBy('id', 'desc')->get();
        $storages =  Storage::where('produce_id','=',$id)->orderBy('id', 'desc')->get();
        $plantings = Planting::where('produce_id','=',$id)->orderBy('id', 'desc')->get();
        $harvestings = Harvesting::where('produce_id','=',$id)->orderBy('id', 'desc')->get();
        $harvests = Harvest::where('produce_id','=',$id)->orderBy('id', 'desc')->get();

        $produce = Produce::where('id','=',$id)->first();
        $produces =Produce::where("user_id",Auth::user()->id)->orderBy('id', 'desc')->get();
        $sum = Preparation::where('produce_id','=',$id)->sum('cost');
        $sum2 = Planting::where('produce_id','=',$id)->sum('cost');
        $sum3 = Harvesting::where('produce_id','=',$id) ->sum('cost');
        $sum4 = Storage::where('produce_id','=',$id)->sum('cost');
        $sum5 = Harvest::where('produce_id','=',$id)->sum('total_harv');
        $sum6 = Harvest::where('produce_id','=',$id)->sum('total_inc');
 return view('reports.financial',compact('sum','sum2','sum3','sum4','sum5','sum6','produces','produce','harvestings','harvests','plantings','storages','preparations'));
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
     $produce = Produce::findOrFail($id);
     if ($produce->status  > 0 ){

        $preparations =Preparation::where('produce_id','=',$id)->orderBy('id', 'desc')->get();
        $storages =  Storage::where('produce_id','=',$id)->orderBy('id', 'desc')->get();
        $plantings = Planting::where('produce_id','=',$id)->orderBy('id', 'desc')->get();
        $harvestings = Harvesting::where('produce_id','=',$id)->orderBy('id', 'desc')->get();
        $harvests = Harvest::where('produce_id','=',$id)->orderBy('id', 'desc')->get();
        $fertilizers = Planting::where('produce_id','=',$id)->where('type','=','Fertilizer')->orderBy('id', 'desc')->get();
        $herbicides = Planting::where('produce_id','=',$id)->where('type','=', 'Herbicide')->orderBy('id', 'desc')->get();
        $produce = Produce::where('id','=',$id)->first();
        $produces =Produce::where("user_id",Auth::user()->id)->orderBy('id', 'desc')->get();

        $sum = Preparation::where('produce_id','=',$id)->sum('cost');
        $sum2 = Planting::where('produce_id','=',$id)->sum('cost');
        $sum3 = Harvesting::where('produce_id','=',$id) ->sum('cost');
        $sum4 = Storage::where('produce_id','=',$id)->sum('cost');
        $sum5 = Harvest::where('produce_id','=',$id)->sum('total_harv');
        $sum6 = Harvest::where('produce_id','=',$id)->sum('total_inc');

 return view('reports.performance',compact('sum','sum2','sum3','sum4','sum5','sum6','produces','produce',
 'herbicides','fertilizers','harvestings','harvests','plantings','storages','preparations'));
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
        if (Preparation::where('produce_id', '=', $request->cp_id)->exists()) {
        }else {
            return back()->with('error', "Please complete land preparation activities");
        }
         if (Planting::where('produce_id', '=', $request->cp_id)->exists()) {
        }else {
            return back()->with('error', "Please complete planting activities");
        }
         if (Cultivation::where('produce_id', '=', $request->cp_id)->exists()) {
        }else {
            return back()->with('error', "Please complete cultivation activities");
        }
         if (Harvesting::where('produce_id', '=', $request->cp_id)->exists()) {
        }else {
            return back()->with('error', "Please complete harvest activities");
        }
         if (Storage::where('produce_id', '=', $request->cp_id)->exists()) {
        }else {
            return back()->with('error', "Please complete storage activities");
        }
        if (Harvest::where('produce_id', '=', $request->cp_id)->exists()) {
            }else {
                return back()->with('error', "Please complete harvests activities");
            }
            $updateDetails = [
            'updated_at' => Carbon::now(),
            'status' => 1
              ];
            DB::table('produces')
                ->where('id', $request->cp_id)
                    ->update($updateDetails);
            DB::table('farms')
            ->where('id', $request->fm_id)
            ->increment('size',$request->size);

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

            DB::table('harvests')
            ->whereRaw('produce_id ', $request->cp_id)
            ->increment('status',1);
                    return redirect()->route('backend.produces.index')
                            ->with('success','Activities completed successfully');

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
