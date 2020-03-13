<?php

namespace App\Http\Controllers;

use App\Preparation;
use Illuminate\Http\Request;
use Session;
class PreparationController extends Controller
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
        $ok = $request->user()->preparations()->create($input);

     if( $ok){
     return back()->with('success','Land Preparations has been added successfully');
     }else{
     Session::flash('error',"Something wen't wrong! Please try again");
     }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Preparation  $preparation
     * @return \Illuminate\Http\Response
     */
    public function show(Preparation $preparation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Preparation  $preparation
     * @return \Illuminate\Http\Response
     */
    public function edit(Preparation $preparation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Preparation  $preparation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
         $update = Preparation::findOrFail($request->prep_id);
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
     * @param  \App\Preparation  $preparation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
             $prepa = Preparation::findOrFail($request->this_id);
             $delete = $prepa->delete();

         if($delete){
          return back()->with('success', 'Activity deleted successfully!');
         } else{
             Session::flash('error', 'Some thing is wrong. Please try again');
        }


    }
}
