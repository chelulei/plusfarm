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

   $produceCount = Farm::where("user_id" ,Auth::user()->id)->count();
   $farmCount = Produce::where("user_id" ,Auth::user()->id)->count();
        return view("home", compact('produceCount', 'farmCount'));
    }
}
