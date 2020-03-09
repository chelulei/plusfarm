<?php

namespace App\Http\Controllers;

use App\Storage;
use Illuminate\Http\Request;

class StorageController extends Controller
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

             $input = $request->all();
            $ok  = $request->user()->storages()->create($input);
         if($ok){
          return back()->with('success','Storage has been added successfully');
         }else {
        Session::flash('error',"Something wen't wrong! Please try again");
         }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Storage  $storage
     * @return \Illuminate\Http\Response
     */
    public function show(Storage $storage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Storage  $storage
     * @return \Illuminate\Http\Response
     */
    public function edit(Storage $storage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Storage  $storage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Storage $storage)
    {
        //
          $data = $request->all();
          $update = Storage::findOrFail($request->storage_id);
          $data = $request->all();
          $ok = $update->update($data);

        if ($ok) {
            return back()->with('success', "Activity updated successfully");
        } else {
            return back()->with('error', "Something wen't wrong! Please try again");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Storage  $storage
     * @return \Illuminate\Http\Response
     */
   public function destroy(Request $request)
    {
        //
        $str = Storage::findOrFail($request->this_id4);
        $delete = $str->delete();

         if($delete){
          return back()->with('success', 'Activity deleted successfully!');
         } else{
             Session::flash('error', 'Some thing is wrong. Please try again');
        }


    }
}
