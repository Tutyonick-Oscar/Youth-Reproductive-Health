<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminViewsController extends Controller
{
    public function welcome ()
    {
        return view('admin.welcome');
    }
    public function slider ()
    {
        return view('admin.slider');
    }
    public function vision ()
    {
        return view('admin.contentsetter');
    }
    public function addContent ()
    {
        return view ('admin.addContent');
    }
    public function blogs ()
    {
        return view ('admin.blogsManager');
    }
    public function addBlog ()
    {
        return view('admin.addBlog');
    }
    public function donations ()
    {
        return view ('admin.donations');
    }
    public function infocontacts ()
    {
        return view('admin.infoContacts');
    }
    public function blogComments ()
    {
        return view('admin.comments');
    }
    public function login ()
    {
        return view('admin.login');
    }
}
