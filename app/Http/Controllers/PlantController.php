<?php

namespace App\Http\Controllers;

use App\Plant;
use Illuminate\Http\Request;
use Session;
use DB;
use App\Variety;
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
         $varieties = Variety::pluck('name','name')->all();
         $plantVariety = $plant->varieties->pluck('name','name')->all();
         return view('crops.edit',compact('plant','varieties','plantVariety'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $plant = Plant::findOrFail($id);
        $oldImage = $plant->image;
        $defaultImage ='default.png';
        $data=$this->handleRequest($request);
        $plant->update($data);
        $plant->varieties()->delete();
        foreach($request->input('varieties') as $variety){
            $plant->varieties()->create([
                'name' => $variety
            ]);

        }

        if (($oldImage !== $plant->image && $oldImage !== $defaultImage)) {

            $this->removeImage($oldImage);

        }

           return redirect()->route('backend.plants.index')
           ->with('success', 'Produce updated successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plant  $plant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        //
      $plant=Plant::FindOrFail($id);
       $defaultImage ='default.png';
        $ok =$plant->delete();

           if ($plant->image !== $defaultImage) {

             $this->removeImage($plant->image);

           }


          if($ok){
                        return back()->with('success', "Produce deleted successfully!!");
                }else {
                        return back()->with('error', "Something wen't wrong! Please try again");

                }

    }


      private function removeImage($image)
    {
        if ( ! empty($image) )
        {
            $imagePath     = $this->uploadPath . '/' . $image;
            if ( file_exists($imagePath) ) unlink($imagePath);

        }
    }
}
