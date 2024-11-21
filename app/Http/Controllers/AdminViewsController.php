<?php

namespace App\Http\Controllers;

use App\Models\Blogcomment;
use Carbon\Carbon;
use App\Models\Blog;
use App\Models\Vision;
use App\Models\Mission;
use App\Models\HomeSlide;
use Illuminate\Http\Request;
use BumpCore\EditorPhp\EditorPhp;

class AdminViewsController extends Controller
{
    public function welcome ()
    {
        return view('admin.welcome');
    }
    /**
     * 
     * slides
     */
    public function slider ()
    {
        return view('admin.slider',[
            'slides'=> HomeSlide::paginate(5)
        ]);
    }
    public function addSlider (){
        return view ('admin.addSlide');
    }
    public function setVision ()
    {   
        $vision = Vision::find(1);
        if ($vision === null) {
            return view('admin.contentsetter');
        }
        return view('admin.contentsetter',[
            'vision'=>$vision,
        ]);

    }
    public function setmission ()
    {   
        $mission = Mission::find(1);
        if ($mission === null) {
            return view('admin.mission');
        }
        return view('admin.mission',[
            'mission'=>$mission,
        ]);

    }
    public function addContent ()
    {
        return view ('admin.addContent');
    }
    public function blogs ()
    {
        return view ('admin.blogsManager',[
            'blogs' => Blog::paginate(5),
            'carbon' =>Carbon::class
            ]);
    }
    public function addBlog ()
    {
        return view('admin.addBlog',[
            'currentDate' => Carbon::now()->format('m-d-Y')
        ]);
    }
    public function donations ()

    {
        return view ('admin.donations');
    }
   
    public function blogComments ()
    {
        return view('admin.comments',[
            'comments'=> Blogcomment::with('blog')->paginate(5),
        ]);
    }
    public function login ()
    {
        return view('admin.login');
    }
}
