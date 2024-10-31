<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Blogcomment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function comment(Request $request, int $id)
    {
        $blog = Blog::findOrFail($id);
        $data = $request->validate([
            "name" => ['required'],
            "email" => ["required","email"],
            "comment" => ["required"],
        ]);

        $blog->comments()->create($data);
        return to_route("blog.detail",["id" =>$blog->id])->with('success' , "comment send successfuly");
    }
}
