<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewController extends Controller
{
   
    public function index () 
    {
        return view('index');
    }
    public function aboutUs () 
    {
        return view('about');
    }
    public function causes () 
    {
        return view('causes');
    }
    public function blogs () 
    {
        return view('blog');
    }
    public function blogDetail () 
    {
        return view('blog-detail');
    }
    public function contact () 
    {
        return view('contact');
    }
}
