<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Cause;
use App\Models\HomeSlide;
use App\Models\Mission;
use App\Models\TeamMember;
use App\Models\User;
use App\Models\Vision;
use BumpCore\EditorPhp\Blocks\Header;
use BumpCore\EditorPhp\Blocks\Image;
use BumpCore\EditorPhp\Blocks\ListBlock;
use BumpCore\EditorPhp\Blocks\Paragraph;
use BumpCore\EditorPhp\EditorPhp;
use Hash;
use Illuminate\Http\Request;
use BumpCore\EditorPhp\Casts\EditorPhpCast;

class viewController extends Controller
{

    protected $casts = [
        'content' => EditorPhpCast::class,
    ];
   
    public function index () 
    {
        EditorPhp::register([
            'image' =>Image::class,
            'paragraph' => Paragraph::class,
            'header' => Header::class,
            'list'=>ListBlock::class,
        ]);
        return view('index',[
            'causes' => Cause::limit(4)->orderBy('created_at','desc')->get(),
            'blogs' => Blog::orderBy('created_at','desc')->limit(3)->get(),
            'about' => About::first(),
            'editorphp'=> EditorPhp::class,
            'vision' => Vision::first(),
            'mission' => Mission::first(),
            'members' => TeamMember::all(),
        ]);
    }

    public  function getSlides()
    {
        $slides = HomeSlide::orderBy('created_at','desc')->limit(3)->get();
        return response()->json([
            'data' => $slides
        ]);
    }
    public function aboutUs () 
    {
        return view('about',[
            'causes' => Cause::limit(4)->get(),
            'blogs' => Blog::orderBy('created_at','desc')->limit(3)->get(),
        ]);
    }
    public function causes () 
    {
        return view('causes',[
            'causes' => Cause::limit(4)->get(),
            'blogs' => Blog::orderBy('created_at','desc')->limit(3)->get(),
        ]);
    }
    public function blogs () 
    {

    // $editor = EditorPhp::make($json);

    // // This will return ['time' => ..., 'blocks' => [...], 'version' => '...']
    // $array = $editor->toArray();
    
        EditorPhp::useTailwind();

        EditorPhp::register([
            'image' =>Image::class,
            'paragraph' => Paragraph::class,
            'header' => Header::class,
            'list'=>ListBlock::class,
        ]);
        
       $blogs = Blog::orderBy('created_at','desc')->paginate(3);
        return view('blog',[
            'blogs'=>$blogs,
            'editorphp'=> EditorPhp::class,
            'allblogs'=> Blog::all(),
            'causes' => Cause::limit(4)->get(),
            'recentBlogs'=>Blog::where('created_at','<',$blogs[0]->created_at)->orderBy('created_at','desc')->limit(3)->get(),

        ]);
    }
    
    public function contact () 
    {
        return view('contact',[
            'causes' => Cause::limit(4)->get(),
            'blogs' => Blog::orderBy('created_at','desc')->limit(3)->get(),
        ]);
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
