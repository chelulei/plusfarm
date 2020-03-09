<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Farm;
class PagesController extends Controller
{
    //

 public function index(){

          return view('auth.login');
    }


public function admin(){

        return view('admin');

    }

    public function countAll(){


        $farmCount = Farm::All()->count();

        $countAll = array(

            'farmCount' => $farmCount

        );

        return (object)$countAll;

    }

    function getCount()
    {
        return response()->json($this->countAll());
    }
}
