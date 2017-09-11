<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
(??)    public function home()
    {
        $this->middleware('auth');
(??)    }
(??)
(??)    public function detail()
(??)    {
(??)        return view('detail');
(??)    }
     public function map()
     {
         return view('map');
     }
(??)}
