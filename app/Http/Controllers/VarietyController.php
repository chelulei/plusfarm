<?php

namespace App\Http\Controllers;

use App\Variety;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
class VarietyController extends Controller
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
    public function store(Requests\SeedStoreRequest $request)
    {
        //
         $data= $this->handleRequest($request);
        $crop = Variety::create($data);

        if( $crop ){
                return redirect()->route('backend.seeds.index')
            ->with('success', 'Variety has been added successfully');
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
    public function edit($id)
    {
        $variety = Variety::findOrFail($id);
         return view('seeds.edit',compact('variety'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Variety  $variety
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
       $plant = Variety::findOrFail($id);
        $oldImage = $plant->image;
        $defaultImage ='noimage.png';
        $data=$this->handleRequest($request);
        $plant->update($data);

        if (($oldImage !== $plant->image && $oldImage !== $defaultImage)) {

            $this->removeImage($oldImage);

        }

           return redirect()->route('backend.seeds.index')
           ->with('success', 'Produce updated successfully');

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
         $defaultImage ='noimage.png';
        $ok =$plant->delete();

           if ($plant->image !== $defaultImage) {

             $this->removeImage($plant->image);

           }


          if($ok){
                        return back()->with('success', "Variety deleted successfully!!");
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
