<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Farm;
use App\User;
use App\Blog;
class PagesController extends Controller
{
    //

 public function index(){

          return view('auth.login');
    }


public function admin(){

         $usersCount = User::where('type', '=', 'user')->count();
         $farmersCount = User::where('type', '=', 'farmer')->count();
        $blogsCount = Blog::all()->count();
        return view('admin',compact('usersCount','farmersCount','blogsCount'));

    }

    // public function countAll(){


    //      $userCount = User::where('type', '=', 'user')->count();
    //      $farmersCount = User::where('type', '=', 'farmer')->count();

    //     $countAll = array(

    //         'userCount' => $userCount,
    //         'farmersCount' => $farmersCount,

    //     );

    //     return (object)$countAll;

    // }

    // function getCount()
    // {
    //     return response()->json($this->countAll());
    // }
}
