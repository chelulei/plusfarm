<?php

namespace App\Http\Controllers;

use App\Farm;
use App\County;
use Illuminate\Http\Request;
use Auth;
use Session;
use DB;
use App\Http\Requests;
class FarmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $farms = Farm::where("user_id",Auth::user()->id)->orderBy('id', 'desc')->get();
        return view('farm.index',compact('farms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Farm $farm)
    {
        //

         $counties = DB::table('counties')->pluck("name","id");
        return view("farm.create", compact('farm','counties'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\FarmStoreRequest $request)
    {


             $input = $request->all();
             $ok = $request->user()->farms()->create($input);

                if($ok){
                        return redirect()->route('backend.farms.index')
                        ->with('success', "Farm has been added successfully");
                }else {
                        return back()->with('error', "Something wen't wrong! Please try again");

                }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Farm  $farm
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Farm  $farm
     * @return \Illuminate\Http\Response
     */
    public function edit(Farm $farm)
    {
        //

            $counties = DB::table('counties')->pluck("name","id");
        return view("farm.edit", compact('farm','counties'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Farm  $farm
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\FarmUpdateRequest $request, Farm $farm)
    {
        //

         $ok = $farm->update($request->all());

       if($ok){
                        return back()->with('success', "Farm was updated successfully!");
                }else {
                        return back()->with('error', "Something wen't wrong! Please try again");

                }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Farm  $farm
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


      $farm=Farm::FindOrFail($id);

        $ok = $farm->delete();

          if($ok){
                        return back()->with('success', "Farm deleted successfully!!");
                }else {
                        return back()->with('error', "Something wen't wrong! Please try again");

                }

   }


 function myformAjax($id)
    {
         $wards = DB::table("wards")->where("county_id", $id)->pluck("name","id");
          return response()->json($wards);

    }

}
