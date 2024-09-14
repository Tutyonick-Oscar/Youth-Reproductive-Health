<?php

namespace App\Http\Controllers;

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
        // $editor =  EditorPhp::make($vision->content);
        // //dd($editor);
        // $json = $editor->blocks->jsonSerialize();
        // //dd($json);
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
        // $editor =  EditorPhp::make($vision->content);
        // //dd($editor);
        // $json = $editor->blocks->jsonSerialize();
        // //dd($json);
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
