<?php

namespace App\Http\Controllers;

use App\Cultivation;
use Illuminate\Http\Request;

class CultivationController extends Controller
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

           if($request->task== 'other'){
             $input['task']=$request->task2;
             $request->user()->cultivations()->create($input);
            return back()->with('success','Cultivation has been added successfully');
           }
           $request->user()->cultivations()->create($input);
            return back()->with('success','Cultivation has been added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cultivation  $cultivation
     * @return \Illuminate\Http\Response
     */
    public function show(Cultivation $cultivation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cultivation  $cultivation
     * @return \Illuminate\Http\Response
     */
    public function edit(Cultivation $cultivation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cultivation  $cultivation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
         $update = Cultivation::findOrFail($request->cultivate_id);
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
     * @param  \App\Cultivation  $cultivation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
           $prepa = Cultivation::findOrFail($request->cul_id5);
             $delete = $prepa->delete();

         if($delete){
          return back()->with('success', 'Activity deleted successfully!');
         } else{
             Session::flash('error', 'Some thing is wrong. Please try again');
        }

    }
}
