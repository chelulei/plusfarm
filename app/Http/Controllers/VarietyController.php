<?php

namespace App\Http\Controllers;

use App\Variety;
use Illuminate\Http\Request;
use DB;
use Session;
class VarietyController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $crops = Variety::latest()->get();
        return view('seeds.index', compact('crops'));
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

            $crop = Variety::create($request->all());

        } catch (\Exception $e) {

            Session::flash('error', "Something wen't wrong! Please try again");
        }

        return redirect()->route('backend.seeds.index')
            ->with('success', 'Seed has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Variety  $variety
     * @return \Illuminate\Http\Response
     */
    public function show(Variety $variety)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Variety  $variety
     * @return \Illuminate\Http\Response
     */
    public function edit(Variety $variety)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Variety  $variety
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Variety $variety)
    {
        //

        $update = Variety::findOrFail($request->prep_id);
         $data = $request->all();
         $ok=$update->update($data);

     if($ok){
            return back()->with('success', "Variety updated successfully");
     }else {
            return back()->with('error', "Something wen't wrong! Please try again");

     }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Variety  $variety
     * @return \Illuminate\Http\Response
     */
    public function destroy(Variety $variety,$id)
    {
        //
           //
       $plant=Variety::FindOrFail($id);

        $ok =$plant->delete();


          if($ok){
                        return back()->with('success', "Variety deleted successfully!!");
                }else {
                        return back()->with('error', "Something wen't wrong! Please try again");

                }
    }
}
