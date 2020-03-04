<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Farm;
class RecordsController extends Controller
{
    //
    public function details($id)
    {
        //
        $preparations = Farm::with('preparations')->find($id)->preparations;
        $storages = Farm::with('storages')->find($id)->storages;
        $plantings = Farm::with('plantings')->find($id)->plantings;
        $harvestings = Farm::with('harvestings')->find($id)->harvestings;
        $activities = Farm::with('activities')->find($id)->activities;
        $farm = Farm::select('farm_name','size')
            ->where('id','=',$id)->first();
        return view('farm.records',compact('farm','harvestings','plantings','storages','preparations','activities'));
    }

}
