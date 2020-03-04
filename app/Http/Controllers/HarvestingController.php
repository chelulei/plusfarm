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
          try {

             $input = $request->all();
            $request->user()->harvestings()->create($input);

           } catch (\Exception $e) {

              Session::flash('error',"Something wen't wrong! Please try again");
          }


             return back()->with('success','Added successfully');
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
    public function update(Request $request, Harvesting $harvesting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Harvesting  $harvesting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Harvesting $harvesting)
    {
        //
    }
}
