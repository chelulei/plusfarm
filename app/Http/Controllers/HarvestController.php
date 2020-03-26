<?php

namespace App\Http\Controllers;

use App\Harvest;
use Illuminate\Http\Request;

class HarvestController extends Controller
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
        //
         $input = $request->all();

       $ok = $request->user()->harvests()->create($input);
         if ($ok) {
            return back()->with('success', 'Added successfully');
         }else {
            return back()->with('error',"Something wen't wrong! Please try again");
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Harvest  $harvest
     * @return \Illuminate\Http\Response
     */
    public function show(Harvest $harvest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Harvest  $harvest
     * @return \Illuminate\Http\Response
     */
    public function edit(Harvest $harvest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Harvest  $harvest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Harvest $harvest)
    {
        //
         //
          //
          $data = $request->all();
         $update = Harvest::findOrFail($request->harv_id);
         $data = $request->all();
         $ok=$update->update($data);

     if($ok){
            return back()->with('success', "Activity updated successfully");
     }else {
            return back()->with('error', "Something wen't wrong! Please try again");

     }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Harvest  $harvest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Harvest $harvest)
    {
        //
          $harvest=Harvest::FindOrFail($request->this_id3);

        $ok= $harvest->delete();


        if ($ok) {
                    return back()->with('success', 'Activity deleted successfully!');
        }else {
            return back()->with('error', 'Some thing is wrong. Please try again');
        }
    }

}
