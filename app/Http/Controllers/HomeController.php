<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Farm;
use App\Produce;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

     $farmCount = Farm::where("user_id" ,Auth::user()->id)->count();
     $produceCount = Produce::where("user_id" ,Auth::user()->id)->count();
     $farms = Farm::where("user_id",Auth::user()->id)->orderBy('id', 'desc')->get();
     $produces = Produce::where("user_id",Auth::user()->id)
                    ->where("status",0)
                    ->orderBy('id', 'desc')->get();
        return view("home", compact('produceCount','farms','produces', 'farmCount'));
    }
}
