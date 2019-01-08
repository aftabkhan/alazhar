<?php

namespace Alazhar\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $user_name = Auth()->user()->name;        
        $url = 'getPackages';
        return view('home')->with('user_name',$user_name)->with('url',$url);
    }
}
