<?php

namespace App\Http\Controllers;

use App\Variety;
use Illuminate\Http\Request;
use DB;
class VarietyController extends Controller
{


    function getVariety($id)
    {

         $varieties = DB::table("varieties")->where("plant_id ",$id)->pluck("name","id");

        return json_encode($varieties);
    }
    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
    //     //
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Variety  $variety
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Variety $variety)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Variety  $variety
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Variety $variety)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Variety  $variety
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Variety $variety)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Variety  $variety
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Variety $variety)
    // {
    //     //
    // }
}
