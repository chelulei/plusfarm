<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use App\User;
use Image;
use Session;
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

          try {
       $user = User::findOrFail($request->user_id);

        $oldImage = $user->image;

        $defaultImage ='default.png';

        $data=$this->handleRequest($request);

        $user->update($data);

        if (($oldImage !== $user->image && $oldImage !== $defaultImage)) {

            $this->removeImage($oldImage);

        }

        } catch (\Exception $e) {

                    Session::flash('error',"Please this are the only images supported Jpg,png,jpg");
                    return redirect()->route('backend.users.index');

                }
     return back()->with('success', 'Image Uploaded Successfully');

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

        private function removeImage($image)
        {
            if ( ! empty($image) )
            {
                $imagePath     = $this->uploadPath . '/' . $image;
                if ( file_exists($imagePath) ) unlink($imagePath);

            }
        }
}
