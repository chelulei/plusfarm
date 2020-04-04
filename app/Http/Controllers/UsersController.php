<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Spatie\Permission\Models\Role;
use DB;
use Session;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use Image;
class UsersController extends Controller
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
        $users = User::where('type', '=', 'user')->orderBy('id', 'desc')->get();
        return view('users.index',compact('users'));


    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        $roles = Role::pluck('name','name')->all();
        return view('users.create',compact('roles','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\UserStoreRequest $request)
    {
         try {
         $data= $this->handleRequest($request);
         $data['password'] = Hash::make($data['username']);
         $user = User::create($data);
         $user->assignRole($request->input('roles'));
        } catch (\Exception $e) {
            Session::flash('error',"Please this are the only images supported Jpg,png,jpg");
            return redirect()->route('backend.users.index');
        }
        return redirect()->route('backend.users.index')->with('success', 'User created successfully');
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        // $user = User::findOrFail($id);
        return view('users.show',compact('user'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
        return view('users.edit',compact('user','roles','userRole'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\UserUpdateRequest $request, $id)
    {
         try {
        $user = User::findOrFail($id);
        $oldImage = $user->image;
        $defaultImage ='default.png';
        $data=$this->handleRequest($request);
        $user->update($data);
        DB::table('model_has_roles')->where('model_id',$id)->delete();
        $user->assignRole($request->input('roles'));
        if (($oldImage !== $user->image && $oldImage !== $defaultImage)) {
            $this->removeImage($oldImage);
        }
     } catch (\Exception $e) {
            Session::flash('error',"Please this are the only images supported Jpg,png,jpg");
            return redirect()->route('backend.users.index');
        }
        return redirect()->route('backend.users.index')->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        try{
              $user = User::findOrFail($id);
               $defaultImage ='default.png';
               $user->delete();

           if ($user->image !== $defaultImage) {

             $this->removeImage($user->image);

           }

     } catch (\Exception $e) {

            Session::flash('error',"Something wen't wrong! Please try again");
            return redirect()->route('backend.users.index');
        }
        return redirect()->route('backend.users.index')->with('success', 'User deleted successfully');
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
