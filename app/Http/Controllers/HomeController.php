<?php

namespace App\Http\Controllers;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      if (Auth::user()->departement == 'prospection') {
        return view('prospection');
      }
      if (Auth::user()->departement == 'assistant') {
        return view('assistant');
      }
        // return view('prospection');
    }
}
