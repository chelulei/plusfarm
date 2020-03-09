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

        try {

             $input = $request->all();
            $request->user()->preparations()->create($input);

           } catch (\Exception $e) {

              Session::flash('error',"Something wen't wrong! Please try again");
          }


             return back()->with('success','Land Preparations has been added successfully');
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
             $delete = Preparation::findOrFail($request->prep_id);
            $delete->delete();

        //  if($delete){
        //   return back()->with('success', 'Details deleted successfully!');
        //  } else{
        //      Session::flash('error', 'Some thing is wrong. Please try again');
        // }


    }
}
