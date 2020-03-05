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
        //
         try {

             $input = $request->all();
            $request->user()->plantings()->create($input);

           } catch (\Exception $e) {

              Session::flash('error',"Something wen't wrong! Please try again");
          }


             return back()->with('success','Added successfully');
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
        //
    $plant = Planting::find($id);
    return response()->json($plant);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Planting  $planting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Planting  $planting
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

          try{

        $planting=Planting::FindOrFail($id);

        $planting->delete();

         } catch (\Exception $e) {

             Session::flash('error', 'Some thing is wrong. Please try again');

        }
       return back()->with('success', 'Details deleted successfully!');
    }

}
