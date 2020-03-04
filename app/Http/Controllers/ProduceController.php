<?php

namespace App\Http\Controllers;

use App\Produce;
use App\Farm;
use App\Plant;
use App\Variety;
use Illuminate\Http\Request;
use DB;
use Session;
use Response;
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

          $produces = Produce::latest()->get();
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
    return view('produce.create',compact('plants','produce'));

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
             $request->user()->produces()->create($input);
           } catch (\Exception $e) {

              Session::flash('error',"Something wen't wrong! Please try again");
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
    public function show(Produce $produce)
    {
        //
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
    return view('produce.edit',compact('plants','produce'));

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