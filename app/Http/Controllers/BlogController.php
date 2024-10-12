<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Auth;
use Illuminate\Http\Request;

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
}
