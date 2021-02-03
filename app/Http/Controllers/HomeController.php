<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Post;
use App\Place;
use App\Package;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $user = User::find(1);
        switch (request('filter')) {
            case 'me':
               $results = Post::where('user_id', Auth::id())->paginate(3);
                break;
            
            default:
               $results = Post::orderBy('created_at', 'desc')->paginate(3);
                break;
        }
        return view('web.home' , compact('user'), ['posts' => $results] );
    }

    public function blog()
    {

        $user = User::find(1);
        switch (request('filter')) {
            case 'me':
               $results = Post::where('user_id', Auth::id())->paginate(5);
                break;
            
            default:
               $results = Post::orderBy('created_at', 'desc')->paginate(5);
                break;
        }
        return view('web.blog' , compact('user'), ['posts' => $results] );
    }

}
