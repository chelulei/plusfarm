<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use App\User;
class ImageController extends Controller
{

    protected $uploadPath;

    public function __construct()
    {
        $this->uploadPath =public_path('images');
    }


    function upload(Request $request)
    {
     $this->validate($request, [

        'image' => 'mimes:jpg,jpeg,bmp,png',

     ]);


     $user = User::findOrFail($request->user_id);

        $oldImage = $user->image;

        $defaultImage ='default.png';

        $data=$this->handleRequest($request);

        $user->update($data);

        if (($oldImage !== $user->image && $oldImage !== $defaultImage)) {

            $this->removeImage($oldImage);

        }

     return back()->with('success', 'Image Uploaded Successfully');


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

        private function removeImage($image)
        {
            if ( ! empty($image) )
            {
                $imagePath     = $this->uploadPath . '/' . $image;
                if ( file_exists($imagePath) ) unlink($imagePath);

            }
        }
}
