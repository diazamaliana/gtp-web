<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\User;
use Notification;
use App\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use File;



class PlaceController extends Controller
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

        $places =Place::orderBy('created_at', 'desc')->paginate(4);
        return view('admin.wahana',compact('places'))->with('i', (request()->input('page', 1) - 1) * 20);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.wahana.create');
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
            'title' => 'required|unique:places',
            'body'  => 'required|max:2000',
            'filename' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:10240'
        ]);   
    
           $place=Place::create([
                'user_id'=>Auth::id(),
                'title' => $request->title,
                'body' => $request->body,
                'slug' =>str_slug($request->title)
            ]);
            
            if($request->hasFile('filename')) 
            {
                $file = $request->file('filename');
                $name = str_slug($request->title).'.'.$file->getClientOriginalExtension();
                $path = Storage::putFileAs('public/places',$file, $name);
                $place->filename = $name;
                $place->save();
 
            }
        

         Session::flash('success', 'Wahana berhasil ditambahkan.');
        return redirect()->back();
    //   return redirect()->route('place', ['slug' => $place->slug ]);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $places= Place::orderBy('created_at', 'asc')->paginate(4);

        return view('web.places' , compact('places') );
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function edit($slug, Place $place)
    {
        // $this->authorize('update', $place);
      
        $place = Place::where('slug', $slug)->first();
        return view('admin.wahana.edit')->with('place', $place);

                 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $this->validate($request, [
        //     'title' => 'required|unique:places',
        //     'body'  => 'required|max:1000',
        // ]);

        $place = Place::find($id);
        $place->title = $request->title;
        $place->body = $request->body;
        $place->slug = str_slug($request->title);

        $place->save();

        Session::flash('success', 'Artikel wahana berhasil diperbaharui.');
        return redirect()->route('places.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $place= Place::find($id);
        $place->delete();
        
        Session::flash('error', 'Artikel berhasil dihapus!');

        return redirect()->route('places.index');
    }
    
    
}
