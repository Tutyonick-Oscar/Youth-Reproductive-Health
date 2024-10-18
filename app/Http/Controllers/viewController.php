<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
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
    public function createuser ()
    {

        User::create([
            'user_name' => 'Lulinda Dullin',
            'email' => 'dullin@gmail.com',
            'password' => Hash::make("youth@2024")
        ]);
    }
}
