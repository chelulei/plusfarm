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

        try {

             $input = $request->all();
            $request->user()->storages()->create($input);

           } catch (\Exception $e) {

              Session::flash('error',"Something wen't wrong! Please try again");
          }


             return back()->with('success','Storage has been added successfully');
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Storage  $storage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Storage $storage)
    {
        //
    }
}
