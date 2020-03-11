<?php

namespace App\Http\Controllers;

use App\Plant;
use Illuminate\Http\Request;
use Session;
use DB;
class PlantController extends Controller
{

     protected $uploadPath;

    public function __construct()
    {
        $this->uploadPath =public_path('images');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $crops = Plant::with('varieties')->get();
        return view('crops.index', compact('crops'));
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
         $data= $this->handleRequest($request);
        $crop = Plant::create($data);

        if( $crop ){
                return redirect()->route('backend.plants.index')
            ->with('success', 'Crop has been added successfully');
            }else {
                Session::flash('error', "Something wen't wrong! Please try again");

            }

    }

     private function handleRequest($request){

                $data = $request->all();

                if($request->hasFile('image')){

                    $image = $request->file('image');

                    $fileNameToStore  = rand() . '.' . $image->getClientOriginalExtension();

                    $destination = $this->uploadPath;

                    $image->move($destination,$fileNameToStore);

                    $data['image'] =  $fileNameToStore;

                }
                return $data;
            }
    /**
     * Display the specified resource.
     *
     * @param  \App\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function show(Plant $plant)
    {
        //
    // $plants = DB::table('plants')->pluck("name","id");
    // return view("reports.crop", compact('plant','plants'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function edit(Plant $plant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plant $plant, $id)
    {
        //
        $plant = Plant::findOrFail($id);
        $oldImage = $plant->image;
        $defaultImage ='default.png';
        $data=$this->handleRequest($request);
        $plant->update($data);
        if (($oldImage !== $plant->image && $oldImage !== $defaultImage)) {

            $this->removeImage($oldImage);

        }

          return back()->with('success','Crop has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plant $plant)
    {
        //
    }
}
