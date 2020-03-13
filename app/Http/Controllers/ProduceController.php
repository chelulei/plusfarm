<?php

namespace App\Http\Controllers;
use App\Produce;
use App\Farm;
use App\Intercrop;
use Illuminate\Http\Request;
use DB;
use Session;
use Auth;
class ProduceController extends Controller
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
        return view('produce.index',compact('produces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Produce $produce)
    {
        //
        $plants = DB::table('plants')->pluck("name","id");
         $farms = Farm::where("user_id",Auth::user()->id)->get();
         $frms = Farm::where('user_id',Auth::user()->id)->pluck('farm_name','id');
        if($farms->count())
        return view('produce.create',compact('plants','produce','frms'));
     else{
            return redirect()->route('backend.produces.index')
                ->with('error', 'Please create farm');
         }



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
         $input = $request->all();
         $farm = Farm::findOrFail($request->farm_id);
        if ($request->size < $farm->size){
            $prod_id = $request->user()->produces()->create($input);
            $farm->size -= $request->size;
            $farm->save();
        }else {
          return back()->with('error','No more Farm for Planting');
        }

         if ($farm->save() && $request->farm_mode == 'Inter-Croping'){
            $inter = new Intercrop;
            $inter->produce_id = $prod_id->id;
            $inter->plant_id2 = $request->input('plant_id2');
            $inter->variety2 = $request->input('variety2');
            $inter->save();
        }
 return redirect()->route('backend.produces.index')
                       ->with('success','Produce has been added successfully');
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produce  $produce
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $preparations = Produce::with('preparations')->find($id)->preparations;
        $storages = Produce::with('storages')->find($id)->storages;
        $plantings = Produce::with('plantings')->find($id)->plantings;
        $harvestings = Produce::with('harvestings')->find($id)->harvestings;
        $activities = Produce::with('activities')->find($id)->activities;
        $produce = Produce::where('id','=',$id)->first();

        return view('produce.show',compact('produce','harvestings','plantings','storages','preparations','activities'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produce  $produce
     * @return \Illuminate\Http\Response
     */
    public function edit(Produce $produce)
    {
        //
    $plants = DB::table('plants')->pluck("name","id");
     $frms = Produce::where('user_id',Auth::user()->id)->pluck('farm_name','id');
    return view('produce.edit',compact('plants','produce','frms'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produce  $produce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Produce $produce)
    {
        //

       try {

     $produce->update($request->all());

         } catch (\Exception $e) {

              Session::flash('error',"Something wen't wrong! Please try again");
        }


        return redirect("/produces")->with('success','Produce was updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produce  $produce
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produce $produce)
    {
        //
        try{

       $produce->delete();

         } catch (\Exception $e) {

             Session::flash('error', 'Some thing is wrong. Please try again');

        }
       return back()->with('success', 'Produce deleted successfully!');


    }

 function myformAjax($id)
    {
         $varieties = DB::table("varieties")->where("plant_id", $id)->pluck("name","id");
          return response()->json($varieties);

    }


}
