<?php

namespace App\Http\Controllers;

use App\Jobs\Compress;
use App\Models\Blog;
use App\Models\Cause;
use Auth;
use Illuminate\Http\Request;
use BumpCore\EditorPhp\Blocks\Header;
use BumpCore\EditorPhp\Blocks\Image;
use BumpCore\EditorPhp\Blocks\ListBlock;
use BumpCore\EditorPhp\Blocks\Paragraph;
use BumpCore\EditorPhp\EditorPhp;

class BlogController extends Controller
{
    public function store (Request $request)
    {
        $user = Auth::user();
        $data = $request->validate([
            'title' => ['required'],
            'image' => ['required','file','image'],
            'content' => ['required','json'],
            'date' => ['date'],
            'type' => [],
            'tags' => []
        ]);
        if ($request->image !== null && !$request->image->getError()){
            $data['image'] = $request->image->store('blogs','public');
            Compress::dispatch($data,'image');
        }
        $user->blogs()->create($data);

        return to_route('admin.blogsManager')->with('success','blog publié avec succès !');
    }
    public function getBlog ( int $id)
    {
        $blog =  Blog::find($id);
        return view('admin.addBlog',[
            'blog' => $blog
        ]);
    }
    public function update (int $id, Request $request)
    {
        $blog =  Blog::find($id);
        
        $data = $request->validate([
            'title' => ['required'],
            'image' => ['file','image'],
            'content' => ['required','json'],
            'date' => ['date'],
            'type' => [],
            'tags' => []
        ]);

        if ($request->image !== null && !$request->image->getError()){
            $data['image'] = $request->image->store('blogs','public');
            Compress::dispatch($data,'image');
        }
        $blog->update($data);
        return to_route('admin.blogsManager')->with('success','blog mis à jour avec succès !');
    }
    public function delete (int $id)
    {
        $blog =  Blog::find($id);
        $blog->delete();
        return to_route('admin.blogsManager')->with('success','blog supprimé !');
    }

    public function typeOfBlog ( string $type )
    {
        EditorPhp::useTailwind();

        EditorPhp::register([
            'image' =>Image::class,
            'paragraph' => Paragraph::class,
            'header' => Header::class,
            'list'=>ListBlock::class,
        ]);
        $blogs = Blog::where('type',$type)->orderBy('created_at','desc')->paginate(3);
        return view('blog',[
            'blogs' => $blogs,
            'editorphp'=> EditorPhp::class,
            'allblogs'=> Blog::all(),
            'causes' => Cause::limit(4)->orderBy('created_at','desc')->get(),

            'recentBlogs'=>Blog::where([['created_at','>',$blogs[0]->created_at],['type',$blogs[0]->type]])->orderBy('created_at','desc')->limit(3)->get(),

        ]);
    }
    public function blogDetail (int $id) 

    {
        EditorPhp::useTailwind();

        EditorPhp::register([
            'image' =>Image::class,
            'paragraph' => Paragraph::class,
            'header' => Header::class,
            'list'=>ListBlock::class,
        ]);
        $blog = Blog::with('user','comments')->find($id);
        return view('blog-detail',[
            'blog'=> $blog,
            'blogs'=>Blog::orderBy('created_at','desc')->get(),
            'editorphp'=> EditorPhp::class,
            'causes' => Cause::limit(4)->orderBy('created_at','desc')->get(),
            'recentBlogs'=>Blog::where('created_at','>',$blog->created_at)->orderBy('created_at','desc')->limit(3)->get(),
        ]);
    }
}
