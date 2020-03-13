<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use App\Notifications\FarmerNotify;
use Auth;
use App\User;
class BlogController extends Controller
{
    protected $limit =3;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
           $blogs=Blog::with('user')
            ->latestFirst()
            ->filter(request('term'))
            ->paginate($this->limit);
        return view('blogs.index',compact('blogs'));
    }

    public function search()
    {

        $blogs = Blog::with('user')
            ->latestFirst()
            ->paginate($this->limit);
        return view('blogs.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $blog = new Blog();
        return view('blogs.create',compact('blog'));
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
            $blog = new Blog;
            $blog->user_id = Auth::user()->id;
            $blog->title = $request->input('title');
            $blog->body = $request->input('body');
            $blog->save();
             $blog->username = Auth::user()->username;

             /*notification*/
            // Get the users
            $farmers =User::where('type', '=', 'farmer')->get();
          \Notification::send($farmers, new FarmerNotify($blog));
        return redirect("/blogs")->with('success','blog has been submitted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //

        return view("blogs.show", compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
        return view("blogs.edit", compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
         $blog->update($request->only('title','body'));
          return redirect()->route('backend.blogs.index')
          ->with('success','blog has been Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
         $blog->delete();

        return back()->with('success','blog has been deleted successfully!');;
    }
}
