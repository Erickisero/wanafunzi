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
        return view('home.index');
    }

    public function about()
    {
        return view('home.about');
    }
    
    public function blog()
    {
        return view('home.blog');
    }
    
    public function faq()
    {
        return view('home.faq');
    }

    public function food()
    {
        return view('home.food');
    }
    public function gallary()
    {
        return view('home.gallary');
    }
    public function location()
    {
        return view('home.location');
    }
    public function menu()
    {
        return view('home.menu');
    }
    public function order()
    {
        return view('home.order');
    }
    
}
