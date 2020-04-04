<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use Image;
class FarmersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $users = User::where('type', '=', 'farmer')->orderBy('id', 'desc')->get();
        return view('farmers.index',compact('users'));

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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
      $user = User::findOrFail($id);
      return view('farmers.edit',compact('user'));
    }


      private function handleRequest($request){
                   $data = $request->all();
                if($request->hasFile('image')){
                    $image = $request->file('image');
                    $fileNameToStore  = rand() . '.' . $image->getClientOriginalExtension();
                    $destination = $this->uploadPath;
                    $successUploaded = $image->move($destination,$fileNameToStore);
                     if ($successUploaded)
                    {
                        $extension = $image->getClientOriginalExtension();
                        $thumbnail = str_replace(".{$extension}", "_thumb.{$extension}",   $fileNameToStore);
                        Image::make($destination . '/' .   $fileNameToStore)
                            ->resize(100, 100)
                            ->save($destination . '/' . $thumbnail);
                    }

                    $data['image'] =  $fileNameToStore;
                 }
                return $data;
            }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
         try {
        $user = User::findOrFail($id);
        $oldImage = $user->image;
        $defaultImage ='default.png';
        $data=$this->handleRequest($request);
        $user->update($data);

        $user->assignRole($request->input('roles'));
        if (($oldImage !== $user->image && $oldImage !== $defaultImage)) {
            $this->removeImage($oldImage);
        }
     } catch (\Exception $e) {
            Session::flash('error',"Please this are the only images supported Jpg,png,jpg");
            return redirect()->route('backend.farmers.index');
        }
        return redirect()->route('backend.farmers.index')->with('success', 'Farmer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
