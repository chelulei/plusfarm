<?php

namespace App\Http\Controllers;

use App\Farm;
use Illuminate\Http\Request;
use Auth;
use Session;
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
         $farms = Farm::latest()->get();
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
        return view("farm.create", compact('farm'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\FarmStoreRequest $request)
    {

        try {

             $input = $request->all();
             $request->user()->farms()->create($input);

           } catch (\Exception $e) {

              Session::flash('error',"Something wen't wrong! Please try again")->error();
          }


            return redirect()->route('backend.farms.index')
            ->with('success','Farm has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Farm  $farm
     * @return \Illuminate\Http\Response
     */
    public function show(Farm $farm)
    {
        //
           return view("farm.show",
            compact('farm'));
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

        return view('farm.edit',compact('farm'));


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
   try {

      $farm->update($request->all());

         } catch (\Exception $e) {

              Session::flash('error',"Something wen't wrong! Please try again");
        }


        return redirect("/farms")->with('success','Farm was updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Farm  $farm
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    try{

      $farm=Farm::FindOrFail($id);

        $farm->delete();

         } catch (\Exception $e) {

             Session::flash('error', 'Some thing is wrong. Please try again');

        }
       return back()->with('success', 'Farm deleted successfully!');

   }


     public function details($id)
    {
        //

        return view('farm.edit',compact('farm'));


    }

}
