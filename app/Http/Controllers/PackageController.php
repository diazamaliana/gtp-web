<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\User;
use Notification;
use App\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use File;



class PackageController extends Controller
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

        $packages =Package::orderBy('created_at', 'desc')->paginate(4);
        return view('admin.paket',compact('packages'))->with('i', (request()->input('page', 1) - 1) * 20);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.paket.create');
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
            'title' => 'required|unique:packages',
            'body'  => 'required|max:2000',
            'price' => 'required|max:2000',
            'filename' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:10240'
        ]);   
    
           $package=Package::create([
                'user_id'=>Auth::id(),
                'title' => $request->title,
                'body' => $request->body,
                'price' => $request->price,
                'slug' =>str_slug($request->title)
            ]);
            
            if($request->hasFile('filename')) 
            {
                $file = $request->file('filename');
                $name = str_slug($request->title).'.'.$file->getClientOriginalExtension();
                $path = Storage::putFileAs('public/packages',$file, $name);
                $package->filename = $name;
                $package->save();
 
            }
        

         Session::flash('success', 'Paket berhasil ditambahkan.');
        return redirect()->back();
    //   return redirect()->route('Package', ['slug' => $package->slug ]);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $packages= Package::orderBy('created_at', 'asc')->paginate(4);

        return view('web.packages' , compact('packages') );
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit($slug, Package $package)
    {
        // $this->authorize('update', $package);
      
        $package = Package::where('slug', $slug)->first();
        return view('admin.paket.edit')->with('package', $package);

                 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $this->validate($request, [
        //     'title' => 'required|unique:Packages',
        //     'body'  => 'required|max:1000',
        // ]);

        $package = Package::find($id);
        $package->title = $request->title;
        $package->body = $request->body;
        $package->slug = str_slug($request->title);

        $package->save();

        Session::flash('success', 'Penjelasan paket berhasil diperbaharui.');
        return redirect()->route('packages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $package= Package::find($id);
        $package->delete();
        
        Session::flash('error', 'Paket berhasil dihapus!');

        return redirect()->route('packages.index');
    }
    
    
}
