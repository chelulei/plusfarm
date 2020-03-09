<?php

namespace App\Http\Controllers;

use App\Harvesting;
use Illuminate\Http\Request;

class HarvestingController extends Controller
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

       $ok = $request->user()->harvestings()->create($input);
         if ($ok) {
            return back()->with('success', 'Added successfully');
         }else {
            return back()->with('error',"Something wen't wrong! Please try again");
         }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Harvesting  $harvesting
     * @return \Illuminate\Http\Response
     */
    public function show(Harvesting $harvesting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Harvesting  $harvesting
     * @return \Illuminate\Http\Response
     */
    public function edit(Harvesting $harvesting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Harvesting  $harvesting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
          //
          $data = $request->all();
         $update = Harvesting::findOrFail($request->harvest_id);
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
     * @param  \App\Harvesting  $harvesting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //

        $harvesting=Harvesting::FindOrFail($request->this_id3);

        $ok= $harvesting->delete();


        if ($ok) {
                    return back()->with('success', 'Activity deleted successfully!');
        }else {
            return back()->with('error', 'Some thing is wrong. Please try again');
        }
    }
}
