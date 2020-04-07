<?php
namespace App\Http\Controllers;
use App\User;
use App\Farm;
use App\Produce;
use DB;
use Session;
use App\Http\Requests;
use App\Variety;
use Carbon\Carbon;
use Illuminate\Http\Request;
class AdminController extends Controller
{
    //
      public function farms($id)
    {
        //
        $user = User::findOrFail($id);
        $farms = Farm::where("user_id", $id)->orderBy('id', 'desc')->get();
        return view('admin.index',compact('farms','user'));
    }
    public function edit($id)
    {
        $farm = Farm::findOrFail($id);
        $counties = DB::table('counties')->pluck("name","id");
        return view("admin.edit", compact('farm','counties'));

    }
    public function update(Requests\FarmUpdateRequest $request,$id)
    {
         $data = $request->all();
         $farm = Farm::find($id);
         $user = Farm::find($id)->first()->user_id;
         if(Produce::count()){
           $size= DB::table('produces')->where('farm_id', $id)->first()->size;
           $size2 = $request->size;
           $size3 = $size2-$size ;
           $data['size'] =  $size3 ;
           $farm->update($data);
         return redirect()->route('farms',[$user])
                         ->with('success', "Farm updated successfully!");
         }else{
               $farm->update($data);
           return redirect()->route('farms',[$user])
                         ->with('success', "Farm  updated successfully!");
         }
    }
     public function produces($id)
    {
        //
         $user = User::findOrFail($id);
          $produces =Produce::where("user_id", $id)
         ->where(DB::raw('status'), '=', 0)
        ->orderBy('id', 'desc')->get();
        return view('admin.index-produce',compact('produces','user'));
    }
    public function editPro($id)
        {
            //
        $produce = Produce::findOrFail($id);
        $user = Produce::find($id)->first()->user_id;
        $plants = DB::table('plants')->pluck("name","id");
        $frms = Farm::where('user_id',$user)->pluck('farm_name','id');
        return view('admin.edit_pro',compact('plants','produce','frms'));

        }
        public function up_date(Request $request, $id)
            {
              $input=$request->all();
              $user = Produce::find($id)->first()->user_id;
              $days = Variety::where('id', $request->variety_id)->first()->days;
              $size = Produce::where('id', $id)->first()->size;
              Farm::find($request->farm_id)->increment('size', $size );
              $produce = Produce::findOrFail($id);
              $start_date=Carbon::createFromFormat('d/m/y', $request->start_date);
                $input['end_date'] =Carbon::parse($start_date)->addDays($days)
                      ->toFormattedDateString();
            if($produce->update($input)){
                  $size = Produce::where('id', $id)->first()->size;
                  Farm::find($request->farm_id)->decrement('size', $size );
                     return redirect()->route('produce',[$user])
                         ->with('success', "Produce  updated successfully!!");
            }else{
            Session::flash('error',"Something wen't wrong! Please try again");
            }

            }
          public function delete(Request $request)
          {

            $farm=Farm::FindOrFail($request->val_id6);

              $ok = $farm->delete();

                if($ok){
                              return back()->with('success', "Farm deleted successfully!!");
                      }else {
                              return back()->with('error', "Something wen't wrong! Please try again");

                      }
        }
}
