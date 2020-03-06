<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use Session;
class AccountController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $user = Auth::user();
        return view('account.index',compact('user'));

}

 /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }


     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request){

              $rules = [
            'name' => 'required|string|max:255',
            'username' => 'required|unique:users,username,'.$request->user_id,
            'email' => 'required|unique:users,email,'.$request->user_id,
            'image' => 'mimes:jpg,jpeg,bmp,png',
            ];

            $request->validate($rules);

     try {

         $update = User::findOrFail($request->user_id);
         $data = $request->all();
         $update->update($data);

     } catch (\Exception $e) {

            Session::flash('error',"Something wen't wrong! Please try again");
            return redirect()->route('backend.account.index');


        }
        return redirect()->route('backend.account.index')->with('success', 'Details updated successfully');


    }


}
