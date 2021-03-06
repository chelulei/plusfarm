<?php

namespace App\Http\Controllers;

use App\Planting;
use Illuminate\Http\Request;

class PlantingController extends Controller
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

          $input = $request->all();

          if($request->task == 'Fertilizer'){
             $input['task']=$request->fert_types;
             $input['type']='Fertilizer';
             $request->user()->plantings()->create($input);
            return back()->with('success','Activity has been added successfully');
           }elseif($request->task == 'Herbicide'){
             $input['task']='(Herbicide)'.' '.$request->herb_types;
             $input['type']='Herbicide';
             $request->user()->plantings()->create($input);
            return back()->with('success','Activity has been added successfully');
           }else {
             $request->user()->plantings()->create($input);
            return back()->with('success','Added successfully');
           }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Planting  $planting
     * @return \Illuminate\Http\Response
     */
    public function show(Planting $planting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Planting  $planting
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Planting  $planting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $data = $request->all();
        $update = Planting::findOrFail($request->plant_id);
        $data = $request->all();
        $ok = $update->update($data);

        if ($ok) {
            return back()->with('success', "Activity updated successfully");
        } else {
            return back()->with('error', "Something wen't wrong! Please try again");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Planting  $planting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $planting=Planting::FindOrFail($request->this_id2);
         $ok= $planting->delete();

        if ($ok) {
                    return back()->with('success', 'Activity deleted successfully!');
        }else {
            return back()->with('error', 'Some thing is wrong. Please try again');
        }


    }

}
