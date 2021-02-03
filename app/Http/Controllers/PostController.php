<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\User;
use Notification;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;



class PostController extends Controller
{
     function __construct()
     {
         return $this->middleware('auth')->except('show');

     }
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts =Post::orderBy('created_at', 'desc')->paginate(20);
        return view('admin.blog',compact('posts'))->with('i', (request()->input('page', 1) - 1) * 20);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //validate
         $this->validate($request, [
            'title' => 'required|unique:posts',
            'body'  => 'required|max:2000',
            'image' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:10240'
        ]);   
    
           $post=Post::create([
                'user_id'=>Auth::id(),
                'title' => $request->title,
                'body' => $request->body,
                'slug' =>str_slug($request->title)
            ]);
            
            if($request->hasFile('image')) 
            {
                $filename = $request->file('image');
                $name = str_slug($request->title).'.'.$filename->getClientOriginalExtension();
                $path = Storage::putFileAs('public/blogs',$filename, $name);
                $post->image = $name;
                $post->save();
 
            }
        

         Session::flash('success', 'Postingan berhasil dibuat.');
      return redirect()->back();
    //   return redirect()->route('post', ['slug' => $post->slug ]);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();

        return view('web.single-blog')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($slug, Post $post)
    {
        // $this->authorize('update', $post);
      
        $post = Post::where('slug', $slug)->first();
        return view('admin.blog.edit')->with('post', $post);

                 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $this->validate($request, [
        //     'title' => 'required|unique:posts',
        //     'body'  => 'required|max:1000',
        // ]);

        $post = Post::find($id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->slug = str_slug($request->title);

        $post->save();

        Session::flash('success', 'Artikel berhasil diperbaharui.');
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post= Post::find($id);
        $post->delete();
        
        Session::flash('error', 'Artikel berhasil dihapus!');

        return redirect()->route('posts.index');
    }
    
    
}
